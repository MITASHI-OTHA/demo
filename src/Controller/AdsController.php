<?php

namespace App\Controller;

use App\Entity\Ad;
use App\Form\AdsType;
use App\Entity\AdType;
use App\Entity\AdActeursOperation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdsController extends AbstractController
{
    /**
     * @Route("/ads/add", name="ads_add")
     */
    public function add(Request $request, EntityManagerInterface $em)
    {
        $ad = new Ad;
        $form = $this->createForm( AdsType::class, $ad);
        $form->handleRequest($request);
        
        if($form->isSubmitted()) 
        {
            if($form->isValid()) 
            {
                $ad->setIsActive(false);

                if(null !== $form->get('actor')->getData()) 
                {
                    foreach($ad->getActor() as $actor) 
                    {
                        $actor->setAdActor($ad);
                        $em->persist($actor);
                    }
                }

                $ad->setAuthor($this->getUser());

                $em->persist($this->getUser());
                $em->persist($ad);
                
                $em->flush();
                
                $this->addFlash('success', "<strong>{$this->getUser()->getPrenom()}, </strong>votre annonce a été crée avec succès.");
                return $this->redirectToRoute('home');
            } 
            else 
            {
                $this->addFlash('errors', "<strong>{$this->getUser()->getPrenom()}, </strong>votre annonce n'a pas été envoyée. Veuillez remplir tous les champs obligatoires.");
            }
        }

        return $this->render('ads/add.html.twig', 
        [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/ad-page/{ad<\d+>}_{slug}", name="ad_page")
     *
     * @param Ad $ad
     * @return Response
     */
    public function adPage(Ad $ad) : Response 
    {
        return $this->render('ads/ad_page.html.twig', 
        [
            'ad' => $ad,
        ]);
    }
}
