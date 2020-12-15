<?php

namespace App\Controller;

use App\Entity\Ad;
use App\Entity\User;
use App\Entity\AdMessages;
use App\Form\MessagesType;
use App\Services\FindAdAuthor;
use App\Services\SenderEmails;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdMessagesController extends AbstractController
{
    /**
     * @Route("/ad/messages/contact-ad-author", name="contact_ad_author")
     */
    public function contactAdAuthor(Request $request, EntityManagerInterface $em)
    {
        $message = new AdMessages;
        $form = $this->createForm(MessagesType::class, $message);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) 
        {
            $message    ->setSender($this->getUser())
                        ->setReceiver($ad->getAuthor())
                        ->setAds($ad)
                        ->setIsRead(false)
            ;
            $em->persist($message);
            $em->flush();

            //notify reveiver
            $subject = "{$message->getSender()->getPrenom()} vous a laissé un message";
            $template = 'ad_messages/notify_author_brindille.html.twig';

            $sendMail->notifyReceiver($message->getSender(), $message->getReceiver()->getEmail(), $subject, null, null, null, $template, $message->getContent());

            $this->addFlash('success', "<strong>{$message->getSender()->getPrenom()}</strong>, votre message a été envoyé avec succès.");

            return $this->redirectToRoute('ad_page', ['ad' => $ad->getId(), 'slug' => $ad->getSlug()]);
        }

        return $this->render('ad_messages/contact_ad_author.html.twig', 
        [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/ad/messages/list-messages", name="list_messages")
     *
     * @param FindAdAuthor $findAdAuthor
     * @param EntityManagerInterface $em
     * @return RedirectResponse
     */
    public function listMessages(FindAdAuthor $findAdAuthor, EntityManagerInterface $em): RedirectResponse
    {
        //dd($findAdAuthor->isAdAuthor($this->getUser()));
        $messages = $findAdAuthor->isAdAuthor($this->getUser()) === false ? $em->getRepository(AdMessages::class)->findByAdAuthor($this->getUser()) : $em->getRepository(AdMessages::class)->findUserByMessages($this->getUser());

        $author = null;
        $ad = null;

        foreach($messages as $message) 
        {
            if( $message->getAds()->getAuthor() === $this->getUser())
            {
                $author = $message->getSender()->getId(); 
                $ad = $message->getAds()->getId();
            }
            else 
            {
                $author = $message->getAds()->getAuthor()->getId(); 
                $ad = $message->getAds()->getId();

            }
        }

        return $this->redirectToRoute('ad_conversation', 
        [
            'author' => $author,
            'ad' => $ad,
        ]);
    }

    /**
     * @Route("/ad/messages/conversation/{author<\d+>}_{ad<\d+>}", name="ad_conversation")
     *
     * @param Request $request
     * @param EntityManagerInterface $em
     * @param User $author
     * @param Ad $ad
     * @param SenderEmails $sendMail
     * @return Response
     */
    public function adConversation(Request $request, EntityManagerInterface $em, User $author, Ad $ad, SenderEmails $sendMail, FindAdAuthor $findAdAuthor) : Response
    {
        $list_messages = $findAdAuthor->isAdAuthor($this->getUser()) === false ? $em->getRepository(AdMessages::class)->findByAdAuthor($this->getUser()) : $em->getRepository(AdMessages::class)->findUserByMessages($this->getUser());
        
        $message = new AdMessages;
        $form = $this->createForm(MessagesType::class, $message);
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()) 
        {
            $message    ->setSender($this->getUser())
                        ->setReceiver($author)
                        ->setAds($ad)
                        ->setIsRead(false);
            $em->persist($message);
            $em->flush();

            //notify reveiver
            $subject = "{$message->getSender()->getPrenom()} vous a laissé un message";
            $template = 'ad_messages/notify_author_brindille.html.twig';

            $sendMail->notifyReceiver($message->getSender(), $message->getReceiver()->getEmail(), $subject, null, null, null, $template, $message->getContent());

            $this->addFlash('success', "<strong>{$message->getSender()->getPrenom()}</strong>, votre message a été envoyé avec succès.");

            return $this->redirectToRoute('ad_conversation', ['author' => $author->getId(), 'ad' => $ad->getId()]);
        }
        
        return $this->render('ad_messages/ad_conversation.html.twig', 
        [
            'ad' => $ad,
            'author' => $author,
            'list_messages' => $list_messages,
            'messages' => $em->getRepository(AdMessages::class)->findDiscussionMessages($this->getUser(), $author),
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/ad/messages/delete/{messageDel<\d+>}", name="messages_delete")
     *
     * @param Request $request
     * @param EntityManagerInterface $em
     * @param AdMessages $messageDel
     * @param FindAdAuthor $findAdAuthor
     * @return RedirectResponse
     */
    public function messagesDelete(Request $request, EntityManagerInterface $em, AdMessages $messageDel, FindAdAuthor $findAdAuthor) : RedirectResponse
    {
        $messages = $findAdAuthor->isAdAuthor($this->getUser()) === false ? $em->getRepository(AdMessages::class)->findByAdAuthor($this->getUser()) : $em->getRepository(AdMessages::class)->findUserByMessages($this->getUser());

        $author = null;
        $ad = null;

        foreach($messages as $message) 
        {
            if( $message->getAds()->getAuthor() === $this->getUser())
            {
                $author = $message->getSender()->getId(); 
                $ad = $message->getAds()->getId();
            }
            else 
            {
                $author = $message->getAds()->getAuthor()->getId(); 
                $ad = $message->getAds()->getId();

            }
        }
        
        if($messageDel instanceof AdMessages && null !== $messageDel) 
        {
            $em->remove($messageDel);
            $em->flush();

            $this->addFlash('success', "<strong>{$this->getUser()->getPrenom()},</strong> votre conversation a été supprimée avec succès.");
        }

        return $this->redirectToRoute('ad_conversation', 
        [
            'author' => $author,
            'ad' => $ad,
        ]);
    }
}
