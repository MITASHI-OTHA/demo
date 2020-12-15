<?php

namespace App\Controller;

use App\Entity\AcquereurCandidature;
use App\Entity\Ad;
use App\Entity\Candidature;
use App\Entity\CandidatureLight;
use App\Entity\LogementActuel;
use App\Entity\LogementDesire;
use App\Entity\MotivationParticipation;
use App\Entity\ResponseMessageCandidature;
use App\Form\CandidatureLightType;
use App\Form\CandidatureType;
use App\Form\ResponseMessageCandidatureType;
use App\Repository\CandidatureLightRepository;
use App\Repository\CandidatureRepository;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use \Symfony\Component\HttpFoundation\Response;
use \Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Dompdf\Dompdf;
use Dompdf\Options;
use function Sodium\add;

class CandController extends AbstractController
{
	/**
	 * @var CandidatureLightRepository
	 */
	private $candidatureLightRepository;

	/**
	 * @var CandidatureRepository
	 */
	private $candidatureRepository;

	/**
	 * @var EntityManagerInterface
	 */
	private $em;


	public function __construct(CandidatureRepository $candidatureRepository,
	                            EntityManagerInterface $em,
	                            CandidatureLightRepository
	                            $candidatureLightRepository)
	{
		$this->candidatureRepository = $candidatureRepository;
		$this->candidatureLightRepository = $candidatureLightRepository;
		$this->em = $em;
	}

	/**
	 * @Route("/user/allcandidature",
	 *     name="MesCandidatures", methods={"GET", "POST"})
	 * @param Request $request
	 * @return JsonResponse|Response
	 */
	public function MesCandidatures(Request $request)
	{
        if (strcmp($this->getUser()->getTypeAccount(), "Porteur de projet") == 0) {
            return $this->redirectToRoute("home");
        }
		$candidatures = $this->candidatureRepository->findBy([
			"Author" => $this->getUser(),
			"visibility" => true]);
		$candidaturesLight = $this->candidatureLightRepository->findBy([
			"author" => $this->getUser(),
			"visibility" => true]);
		$candidatures = array_merge($candidatures, $candidaturesLight);
		if ($request->isXmlHttpRequest() && !is_null($request->get("candidature"))
			&& !is_null($request->get("type")) && !is_null($request->get("status"))) {
			$id_candidature = (int)$request->get("candidature");
			$type = htmlspecialchars($request->get("type"));
			$status = (int)$request->get("status");
			$success_ajax =  new JsonResponse([
				'msg' => 'la requête à étais executer avec succes',
			], 200);
			$error_ajax = new JsonResponse([
				'msg' => "il y a eu un soucis lors de l'execution de la requête",
			], 500);

			if (strcmp($type, "light") === 0) {
				$candidature = $this->candidatureLightRepository->findOneBy([
					"id" => $id_candidature,
					"author" => $this->getUser()
				]);
			} elseif (strcmp($type, "complet") === 0) {
				$candidature = $this->candidatureRepository->findOneBy([
					"id" => $id_candidature,
					"Author" => $this->getUser()
				]);
			} else {
				return $error_ajax;
			}

			if (!is_null($candidature) || ($status > 0)) {
				if ($status === 5) {
					$candidature->setStatus($status);
					$this->getUser()->setBlockedCandidature(true);
					$this->removeUserofAllCandidature($candidatures,
						$candidature->getId());
				} else {
					$this->em->remove($candidature);
				}
				$this->em->flush();
				return $success_ajax;
			}
			return $error_ajax;
		}

		return $this->render('cand/allCandidatureUser.html.twig', [
			"candidatures" => $candidatures,
			"total" => count($candidatures)
		]);
	}

	/**
	 * @Route("annonce/{annonce}/candidature/inscription", name="NewCandidature", methods={"GET", "POST"})
	 * @param  Ad|null $annonce
	 * @param Request $request
	 * @return Response|NotFoundHttpException
	 */
    public function NewCandidature(Ad $annonce, Request $request)
    {
	    $new_candidature = new Candidature(null, $annonce, $this->getUser());

        if (strcmp($this->getUser()->getTypeAccount(), "Porteur de projet") === 0 || $this->getUser()->getBlockedCandidature()) {
            return $this->redirectToRoute("home");
        }
	    if (is_null($annonce)) {
		    return $this->createNotFoundException("Annonce pas trouvé");
	    }
	    if (strcmp($annonce->getTypeFormCandidature(), "Formulaire complet") !== 0) {
			return $this->redirectToRoute("NewCandidatureLight", ["annonce" => $annonce->getId()]);
	    }
	    if (($cand = $this->candidatureRepository->findOneBy(["Author" => $this->getUser(), "ad" => $annonce]) !== null)) {
	    	$this->addFlash("error", "vous avez déjà postulé pour cette annonce");
	    	return $this->redirectToRoute("MesCandidatures");
	    }

	    $register = $request->get("enregistrer") !== null;
	    $form_candidature = $register ? $this->createForm(CandidatureType::class, $new_candidature, [
		    "validation_groups" => false
	    ]) : $this->createForm(CandidatureType::class, $new_candidature);
	    $form_candidature->handleRequest($request);
	    if ($form_candidature->isSubmitted()) {
		    if ($register) {
			    $new_candidature = $this->EnregistreCandidature($request, $new_candidature, $form_candidature);
			    $this->em->persist($new_candidature);
			    $this->em->flush();
			    $this->addFlash("success", "Votre candidature à bien été enregistrée");
			    return $this->redirectToRoute("MesCandidatures");
		    }

		    if ($form_candidature->isValid()) {
			    $new_candidature->setStatus(1);
			    $this->em->persist($new_candidature);
			    $this->em->flush();
			    $this->addFlash("success", "Votre candidature à bien été envoyé");
			    return $this->redirectToRoute("MesCandidatures");
		    }
	    }
	    return $this->render('cand/index.html.twig', [
		    "form" => $form_candidature->createView()
        ]);
    }

	/**
	 * @Route("/user/edit/candidature/{candidature}", name="EditCandidature", methods={"GET", "POST"})
	 * @param Candidature|null $candidature
	 * @param Request $request
	 * @return Response | NotFoundHttpException
	 */
	public function EditCandidature(Candidature $candidature, Request $request) : Response
	{
        if (strcmp($this->getUser()->getTypeAccount(), "Porteur de projet") === 0 || $this->getUser()->getBlockedCandidature()) {
            return $this->redirectToRoute("home");
        }
		if (is_null($candidature) || ($candidature->getStatus() !== 0 && $candidature->getStatus() !== 4)) {
			return $this->redirectToRoute("MesCandidatures");
		}
		$register = $request->get("enregistrer") !== null;
		$form_candidature = $register ? $this->createForm(CandidatureType::class, $candidature, [
			"validation_groups" => false
		]) : $this->createForm(CandidatureType::class, $candidature);

		if ($register) {
			$this->EnregistreCandidature($request, $candidature, $form_candidature);
			$this->em->flush();
			$this->addFlash("success", "Votre candidature à bien était enregistrée");
			return $this->redirectToRoute("MesCandidatures");
		}
		$form_candidature->handleRequest($request);
		if ($form_candidature->isSubmitted() && $form_candidature->isValid()) {
		    $candidature->setStatus(1);
			$this->em->flush();
			$this->addFlash("success", "Votre candidature à bien était envoyé");
			return $this->redirectToRoute("MesCandidatures");
		}

		return $this->render('cand/index.html.twig', [
			"form" => $form_candidature->createView()
		]);
	}

	/**
	 * @param $request
	 * @param Candidature $new_candidature
	 * @return Candidature
	 */
	private function EnregistreCandidature($request, Candidature $new_candidature, FormInterface $form): Candidature
	{
		$candidature_send = $request->request->get("candidature");

		$new_candidature->setAuthor($this->getUser());
		if ($form->get('acquereurs')->getData()[0] !== null) {
			foreach ($new_candidature->getAcquereurs() as $acquereurs) {
				$acquereurs->setCandidatures($new_candidature);
				$this->em->persist($acquereurs);
			}
		}
		$new_candidature->setVisibility(true);
		$new_candidature->setStatus(0);
		$new_candidature->setChecks($candidature_send["checks"]);
		$new_candidature->setAcquereur(new AcquereurCandidature($candidature_send["acquereur"]));
		$new_candidature->setLogementActuel(new LogementActuel($candidature_send["LogementActuel"]));
		$new_candidature->setLogementDesire(new LogementDesire($candidature_send["logementDesire"]));
		$new_candidature->setMotivationParticipation(new MotivationParticipation($candidature_send["motivationParticipation"]));
		return $new_candidature;
	}

	/*
	 * DébutCandidature Light
	 */

	/**
	 * @Route("annonce/{annonce}/candidaturelight/inscription", name="NewCandidatureLight", methods={"GET", "POST"})
	 * @param  Ad | int | null $annonce
	 * @param Request $request
	 * @return Response|NotFoundHttpException
	 */
	public function NewCandidatureLight(Ad $annonce, Request $request)
	{
		$new_candidature = new CandidatureLight($annonce->getId(), $this->getUser());
        if (strcmp($this->getUser()->getTypeAccount(), "Porteur de projet") === 0 || $this->getUser()->getBlockedCandidature()) {
            return $this->redirectToRoute("home");
        }
		if (is_null($annonce)) {
			return $this->createNotFoundException("Annonce pas trouvé");
		}

        if (strcmp($annonce->getTypeFormCandidature(), "Formulaire complet") === 0) {
            return $this->redirectToRoute("NewCandidature", ["annonce" => $annonce->getId()]);
        }
		if ($this->candidatureLightRepository->findOneBy(["author" => $this->getUser(), "Ad" => $annonce]) !== null) {
	    	$this->addFlash("success", "vous avez déjà postulé pour cette annonce");
	    	return $this->redirectToRoute("MesCandidatures");
	    }
		$register = $request->get("enregistrer") !== null;
		$form_candidature = $register ? $this->createForm(CandidatureLightType::class, $new_candidature, [
			"validation_groups" => false
		]) : $this->createForm(CandidatureLightType::class, $new_candidature);
		$form_candidature->handleRequest($request);
		if ($form_candidature->isSubmitted()) {
			if ($register) {
				$this->EnregistreCandidatureLight($request, $new_candidature);
				$this->em->persist($new_candidature);
				$this->em->flush();
				$this->addFlash("success", "Votre candidature à bien était enregistrée");
				return $this->redirectToRoute("MesCandidatures");
			}

			if ($form_candidature->isValid()) {
				$this->em->persist($new_candidature);
				$this->addFlash("success", "Votre candidature à bien était envoyé");
				return $this->redirectToRoute("MesCandidatures");
			}
		}
		return $this->render('cand/index.html.twig', [
			"form" => $form_candidature->createView()
		]);
	}

	/**
	 * @param $request
	 * @param CandidatureLight $new_candidature
	 * @return CandidatureLight
	 */
	private function EnregistreCandidatureLight($request, CandidatureLight $new_candidature) : CandidatureLight {
		$candidature_send = $request->get("candidature_light");
		$new_candidature->setChecks($candidature_send["checks"]);
		$new_candidature->setTailleFoyer((int) $candidature_send["tailleFoyer"]);
		$new_candidature->setLogementRecherche("T1" ? !isset($candidature_send["logementRecherche"]) : $candidature_send["logementRecherche"]);
		$new_candidature->setSurfaceSouhaitee((int) $candidature_send["surfaceSouhaitee"]);
		$new_candidature->setSurfaceMin((int) $candidature_send["surfaceMin"]);
		$new_candidature->setSurfaceMax((int) $candidature_send["surfaceMax"]);
		$new_candidature->setEnveloppeMax((int) $candidature_send["enveloppeMax"]);
		$new_candidature->setMotivation($candidature_send["motivation"]);
		$new_candidature->setStatus(0);
		$new_candidature->setVisibility(true);
		return $new_candidature;
	}


	/**
	 * @Route("/user/edit/candidaturelight/{candidature}", name="EditCandidatureLight", methods={"GET", "POST"})
	 * @param CandidatureLight|null $candidature
	 * @param Request $request
	 * @return Response | NotFoundHttpException
	 */
	public function EditCandidatureLight(CandidatureLight $candidature, Request $request) : Response
	{
        if (strcmp($this->getUser()->getTypeAccount(), "Porteur de projet") === 0 || $this->getUser()->getBlockedCandidature()) {
            return $this->redirectToRoute("home");
        }
		if (is_null($candidature)) {
			return $this->redirectToRoute("MesCandidatures");
		}
		if ($candidature->getAuthor() !== $this->getUser()) {
			return $this->redirectToRoute("home");
		}
		$register = $request->get("enregistrer") !== null;
		$form_candidature = $register ? $this->createForm(CandidatureLightType::class, $candidature, [
			"validation_groups" => false
		]) : $this->createForm(CandidatureLightType::class, $candidature);

		if ($register) {
			$this->EnregistreCandidatureLight($request, $candidature);
			$this->em->flush();
			$this->addFlash("success", "Votre candidature à bien était enregistrée");
			return $this->redirectToRoute("MesCandidatures");
		}
		$form_candidature->handleRequest($request);
		if ($form_candidature->isSubmitted() && $form_candidature->isValid()) {
			$candidature->setStatus(1);
			$this->em->flush();
			$this->addFlash("success", "Votre candidature à bien était envoyé");
			return $this->redirectToRoute("MesCandidatures");
		}
		return $this->render('cand/index.html.twig', [
			"form" => $form_candidature->createView()
		]);
	}

	/**
	 * @Route("/user/annonce/{annonce}/candidature/manage/",
	 *     name="ManageCandidature", methods={"GET", "POST"})
	 * @param Ad | null $annonce
	 * @param Request $request
	 * @return Response | JsonResponse
	 */
	public function manageCandidature(Ad $annonce, Request $request)
	{
        if (strcmp($this->getUser()->getTypeAccount(), "Porteur de projet") !== 0) {
            return $this->redirectToRoute("home");
        }
        if (is_null($annonce) || $annonce->getAuthor() !== $this->getUser()) {
			return $this->redirectToRoute("home");
		}
        if (strcmp($annonce->getTypeFormCandidature(), "Formulaire complet") === 0) {
	        $allCandidatures = $this->candidatureRepository->getAllCandidatureByAd($annonce);
        } else {
	        $allCandidatures = $this->candidatureLightRepository->getAllCandidatureByAd($annonce);
        }

        if($request->isXmlHttpRequest())
		{
			$success_ajax =  new JsonResponse([
					'msg' => 'la requête à étais executer avec succes',
				], 200);
			$error_ajax = new JsonResponse([
					'msg' => "il y a eu un soucis lors de l'execution de la requête",
				], 500);

			if (!is_null($request->get("candidature")) && !is_null($request->get("status")) && !is_null($request->get("type")) && !is_null($request->get("annonce"))) {
				if (strcmp(htmlspecialchars($request->get("type")), "light") === 0) {
					return $this->changeStatusCandidatureLight($error_ajax,
						$success_ajax, $request, $annonce);
				}

				if (strcmp(htmlspecialchars($request->get("type")), "complet") === 0) {
					return $this->changeStatusCandidature($error_ajax,
						$success_ajax, $request, $annonce);
				}
				return $error_ajax;
			}
			return $error_ajax;
		}
		return $this->render('cand/ManageCandidature.html.twig', [
			"allcandidatures" => $allCandidatures,
			"id_annonce" => $annonce->getId()
			]);
	}

	public function changeStatusCandidature($error_ajax, $success_ajax,
	                                        $request,Ad $annonce) {
		$candidature = $this->candidatureRepository->findOneBy([
			"id" => (int)$request->get("candidature"),
			"name" => "candidature_".$annonce->getId()
		]);
		if (is_null($candidature) || (int)$request->get("status")
			> 4 || (int)$request->get("status") < 1) {
			return $error_ajax;
		}
		$candidature->setStatus((int)$request->get("status"));
		$this->em->flush();
		return $success_ajax;

	}

	public function changeStatusCandidatureLight($error_ajax, $success_ajax,
	                                        $request, $annonce) {
		$candidaturelight = $this->candidatureLightRepository->findOneBy([
			"id" => (int)$request->get("candidature"),
			"name" => "candidaturelight_".$annonce->getId()
		]);
		if (is_null($candidaturelight) || (int)$request->get("status") > 4 || (int)$request->get("status") < 1) {
			return $error_ajax;
		}
		$candidaturelight->setStatus((int)$request->get("status"));
		$this->em->flush();
		return $success_ajax;

	}

	private function removeUserofAllCandidature($allcandidature, $id_candidature_valid): void
	{
		foreach ($allcandidature as $candidature) {
			if ($candidature->getId() !== $id_candidature_valid) {
				$this->em->remove($candidature);
			}
		}
	}

	/**
	 * @Route("/user/annonce/{annonce}/candidature/manage/pdf/{candidature}", name="GeneratePdfCandidature", methods={"GET", "POST"})
	 * @param  Ad | int | null $annonce
	 * @param   int candidature
	 */
	public function GeneratePdf(Ad $annonce, $candidature, Request $request)
	{

//		if (strcmp($request->server->all()["HTTP_REFERER"], $this->generateUrl("ManageCandidature", ["annonce" => $annonce->getId()])) !== 0) {
//			dump($this->generateUrl("ManageCandidature", ["annonce" => $annonce->getId()]));
//			dump($request->server->all()["HTTP_REFERER"]);
//			dd($request);
//
//		} else {
//			dump($request);
//		}

		if (strcmp($annonce->getTypeFormCandidature(), "Formulaire complet") === 0) {
			$Candidature = $this->candidatureRepository->findOneBy(["id" => $candidature]);

			if (is_null($Candidature))
				return $this->redirectToRoute("ManageCandidature", ["annonce" => $annonce->getId()]);

			$form_candidature = $this->createForm(CandidatureType::class, $Candidature);
		} else {
			$Candidature = $this->candidatureLightRepository->findOneBy(["id" => $candidature]);

			if (is_null($Candidature))
				return $this->redirectToRoute("ManageCandidature", ["annonce" => $annonce->getId()]);
			$form_candidature = $this->createForm(CandidatureLightType::class, $Candidature);
		}

		$pdfOptions = new Options();
		$pdfOptions->set('defaultFont', 'Arial');

		$dompdf = new Dompdf($pdfOptions);

		$html =$this->render('cand/pdf_view.html.twig', [
			"form" => $form_candidature->createView()
		]);
		$dompdf->loadHtml($html);
		$dompdf->setPaper('A4', 'portrait');
		$dompdf->render();
		$dompdf->stream($this->getUser()->getUsername().".pdf", [
			"Attachment" => false
		]);
	}

	/**
	 * @Route("/user/annonce/{annonce}/candidature/manage/reponse/", name="ReponseCandidature", methods={"GET", "POST"})
	 * @param Ad | int | null $annonce
	 * @param Request $request
	 * @return JsonResponse
	 */
	public function ReponseCandidature(Ad $annonce, Request $request) {
		if($request->isXmlHttpRequest()) {

			$reponse_ajax =  new JsonResponse([], 200);

			// request ajax with method GET
			if (strcmp($request->getMethod(), "GET") === 0) {
				$form = $this->createForm(ResponseMessageCandidatureType::class);

				//verify if all params is not missing
				if (is_null($request->get("type")) or is_null($request->get("id_candidature"))
					or is_null($request->get("status"))) {
					$reponse_ajax->setStatusCode(500, "problème lors de l'execution de la requete");
					$reponse_ajax->setData(["probleme lors de l'exceution de la requete"]);

					return $reponse_ajax;
				}

				return $reponse_ajax->setData([
					$this->renderView('cand/Reponseform.html.twig', [
					"form"=>$form->createView(),
					"type" => (string) $request->get("type"),
					"status" => (int) $request->get("status"),
					"candidature" =>$request->get('id_candidature')
				])]);
			}

			// request ajax with method POST
			if (strcmp($request->getMethod(), "POST") === 0) {

				//verify if all params is not missing
				if (is_null($request->get("LogementActuel")) or is_null($request->get("LogementDesire"))
					or is_null($request->get("Contents")) or is_null($request->get("Acquereur")) or
					is_null($request->get("Credits")) or is_null($request->get("Motivation"))) {
					$reponse_ajax->setStatusCode(500, "il manque un parametre");
					$reponse_ajax->setData(["probleme lors de l'exceution de la requete"]);
					return $reponse_ajax;
				}
				$this->addFlash("error", "debug");
				//verify if i find all params for find candidature
				if (is_null($request->get('id_candidature')) or is_null($request->get("status"))
				or is_null($request->get("type"))) {
					$reponse_ajax->setStatusCode(500, "problème lors de l'execution de la requete");
					$reponse_ajax->setData(["probleme lors de l'exceution de la requete"]);
					return $reponse_ajax;
				}

				return $this->changeCandidature($request, $annonce);
			}

			$reponse_ajax->setStatusCode(500, "problème lors de l'execution de la requete");
			$reponse_ajax->setData(["probleme lors de l'exceution de la requete"]);
			return $reponse_ajax;
		}
	}

	/**
	 * @param Request $request
	 * @return JsonResponse
	 */
	public function changeCandidature(Request $request, Ad $annonce)
	{
		$newResponseMessage = new ResponseMessageCandidature($this->getUser());
		$Motivation = (bool) $request->get("Motivation");
		$Credits = (bool) $request->get("Credits");
		$Acquereur = (bool) $request->get("Acquereur");
		$Contents = htmlspecialchars($request->get("Contents"));
		$LogementDesire = (bool) $request->get("LogementDesire");
		$LogementActuel = (bool) $request->get("LogementActuel");
		$type_annonce = preg_split("/[\s,]+/", $annonce->getTypeFormCandidature())[1];
		$reponse_ajax =  new JsonResponse([$request->get("type")], 200);

		// check if response is for light candidature or complete
		if (strcmp($request->get("type"), "complet") === 0 and
			strcmp($type_annonce, $request->get("type" )) === 0 ) {
			$candidature = $this->candidatureRepository->findOneBy([
				"id" => $request->get("id_candidature"),
				"ad" => $annonce->getId()
			]);

			if (is_null($candidature)) {
				$this->addFlash("error", "une erreur est survenue lors l'envoie du message");
				$reponse_ajax->setStatusCode(500, "problème lors de l'execution de la requete");
				$reponse_ajax->setData(["probleme lors de l'exceution de la requete"]);
				return $reponse_ajax;
			}
			$reponse_ajax =  new JsonResponse([$candidature], 200);
			$newResponseMessage->setCandidature($candidature);
			$newResponseMessage->setMotivation($Motivation);
			$newResponseMessage->setAcquereur($Acquereur);
			$newResponseMessage->setContents($Contents);
			$newResponseMessage->setCredits($Credits);
			$newResponseMessage->setLogementActuel($LogementActuel);
			$newResponseMessage->setLogementDesire($LogementDesire);
			$this->em->persist($newResponseMessage);
			$candidature->setStatus((integer) $request->get("status"));
			$this->em->flush();
			$this->addFlash('success', "ton message à bien était envoyé au client");

		}

		if (strcmp($request->get("type"), "light") === 0 and
			strcmp($type_annonce, $request->get("type" )) === 0) {
			$candidature = $this->candidatureRepository->findOneBy([
				"id" => $request->get("id_candidature"),
				"ad" => $annonce->getId()
			]);
		}
		$this->addFlash("error", "une erreur est survenue lors l'envoie du message");
		return $reponse_ajax;

	}
}
