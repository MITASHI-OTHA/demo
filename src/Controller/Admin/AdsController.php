<?php

namespace App\Controller\Admin;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdsController extends AbstractController
{
    /**
     * @Route("/admin/ads/list", name="ads_list")
     */
    public function adsList(EntityManagerInterface $em)
    {
        return $this->render('admin/ads/ads_list.html.twig', 
        [
            //'users' => $em->getRepository(Ad::class)->findAll(),
        ]);
    }
}
