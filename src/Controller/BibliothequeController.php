<?php

namespace App\Controller;

use App\Entity\Ad;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use \Symfony\Component\HttpFoundation\Response;
class BibliothequeController extends AbstractController
{
	/**
	 * @Route("/annonce/{name}/bibliotheque", name="bibliotheque")
	 * @param Ad | null $annonce
	 * @return NotFoundHttpException | Response
	 */
    public function bibliotheque(Ad $annonce = null)
    {
    	if (is_null($annonce)):
    		throw $this->createNotFoundException("annonce non trouver");
		endif;

	    $all_media = [];
		for ($i = 0; $i < 11; ++$i):
			$name = "getPhoto".$i;
			$all_media[] = $annonce->{$name}();
        endfor;

    	return $this->render('bibliotheque/bibliotheque.html.twig', [
        	"all_media" => $all_media
        ]);
    }
}
