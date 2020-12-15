<?php

namespace App\Controller;

use App\Entity\Ad;
use App\Form\AdSearchType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class AdSearchController extends AbstractController
{
    /**
     * @Route("/ad/search", name="ad_search")
     */
    public function adSearch(Request $request, EntityManagerInterface $em)
    {
        $ads = $em->getRepository(Ad::class)->findBy([], ['createdAt' => 'DESC']);
        $form = $this->createForm(AdSearchType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) 
        {
            
            if(null !== $request->get('min_price') && null !== $request->get('max_price') && '' !== $request->get('min_price') && '' !== $request->get('max_price')) 
            {
                $ads = $em->getRepository(Ad::class)->findAdsByCriteria($form->get('typeProjet')->getData(), $form->get('typologie')->getData(), $form->get('etatAvancementProjet')->getData(), $form->get('ville')->getData(), $form->get('dateLivraison')->getData(), $request->get('min_price'), $request->get('max_price'));
            } 
            else
            {
                $ads = $em->getRepository(Ad::class)->findAdsByCriteria($form->get('typeProjet')->getData(), $form->get('typologie')->getData(), $form->get('etatAvancementProjet')->getData(), $form->get('ville')->getData(), $form->get('dateLivraison')->getData());
            }
        }
        
        if($request->isXmlHttpRequest()) 
        {
            $ads = $em->getRepository(Ad::class)->findAdsByCriteria($form->get('typologie')->getData(), $form->get('etatAvancementProjet')->getData(), $form->get('prix')->getData(), $form->get('ville')->getData());

            return new JsonResponse(
            [
                'msg' => 'The Price Request successfuly',
                'ads' => $ads,
            ], 200);
        }
        // ad_search/ad_search.html.twig'
        return $this->render('ad_search/ad_search.html.twig',
        [
            'form' => $form->createView(),
            'ads' => $ads,
        ]);
    }
    /**
     * @Route("/ad/search/ads-list", name="ads_search_list")
     */
    public function adsList()
    {
        $form = $this->createForm(AdSearchType::class);
        return $this->render('ad_search/ad_search_ads_list.html.twig', [
            'form' => $form->createView()
        ]);
    }
}

