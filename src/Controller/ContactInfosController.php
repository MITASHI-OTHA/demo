<?php

namespace App\Controller;

use App\Entity\ContactInfos;
use App\Form\ContactInfosType;
use App\Services\SenderEmails;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactInfosController extends AbstractController
{
    /**
     * @Route("/contact/infos", name="contact_infos")
     */
    public function contact(Request $request, EntityManagerInterface $em, SenderEmails $emailService)
    {
        $contact = new ContactInfos;
        $form = $this->createForm(ContactInfosType::class, $contact);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) 
        {
            if(empty($form->getData()->getRecaptchaToken())) 
            {
                $this->addFlash('errors', 'Nous sommes désolés, votre navigateur ou votre réseau ne peut envoyer des requêtes automatisées. Pour protéger nos utilisateurs, nous ne pouvons pas traiter votre demande pour le moment !');
                return $this->redirectToRoute('contact_infos');
            } 
            else 
            {
                $url = 'https://www.google.com/recaptcha/api/siteverify?secret=6Le5SbMZAAAAAPNrwfAerjtzgFjfW-QGjavlYuBf&response='. $form->getData()->getRecaptchaToken();
                //verifying if curl exist
                if(function_exists('curl_version')) 
                {
                    $curl = curl_init($url);
                    
                    curl_setopt($curl, CURLOPT_HEADER, false);
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($curl, CURLOPT_TIMEOUT, 1);
                    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                    
                    $response = curl_exec($curl);
                } 
                else 
                {
                    $response = file_get_contents($url);
                }
                
                if(empty($response) || is_null($response)) 
                {
                    $this->addFlash('errors', 'Nous sommes désolés, votre navigateur ou votre réseau ne peut envoyer des requêtes automatisées. Pour protéger nos utilisateurs, nous ne pouvons pas traiter votre demande pour le moment !');
                    return $this->redirectToRoute('contact_infos');
                } 
                else 
                {
                    $data = json_decode($response);

                    if(false !== $data->success) 
                    {
                        // persist data and sending email
                        $em->persist($contact);
                        $em->flush();

                        //sending email
                        $user = $form->getData()->getPrenom() .' '. $form->getData()->getNom();
                        $subject = 'Confirmation d\’envoi de message de contact';
                        $template = 'contact_infos/contact_us_brindille.html.twig';
                        
                        $emailService->notifyReceiver($user, $form->getData()->getEmail(), $subject, $token = null, $url = null, $flash_message = null, $template);

                        $this->addFlash('success', "<strong>{$form->getData()->getPrenom()},</strong> votre message a été transmis à notre équipe avec succès.");

                        return $this->redirectToRoute('home');
                    }
                }
            }
        }
        
        return $this->render('contact_infos/contact_us.html.twig', 
        [
            'form' => $form->createView()
        ]);
    }
}
