<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Form\CandidatureType;
use App\Form\CandidatureLightType;
use App\Form\ResponseMessageCandidatureType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Entity\Ad;
use App\Entity\User;
class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function accueil()
    {
        return $this->render('home/index.html.twig');
    }
    /**
     * @Route("/projet/{id}", name="projet")
     */
    public function projet($id)
    {
        if($id ==  '1' || $id == '4') {
            $page = 'projet/projet-page.html.twig';
        } else
        if($id == '2') {
            $page = 'projet/projet2.html.twig';
        } else
        if($id == '3') {
            $page = 'projet/projet3.html.twig';
        } else {
            return $this->redirectToRoute('home');
        }
        return $this->render($page,
        [
           'id'=> $id
        ]);
    }
    /**
     * @Route("/inscriptions", name="inscriptions")
     */
    public function success() {

        return $this->render('security/user_registration_success.html.twig',
        [
            
        ]);
    }
    /**
     * @Route("/candidater", name="candidater")
	 */
    public function candidater() {
        $form_candidature = $this->createForm(CandidatureType::class);
        return $this->render('candidater/candidater.html.twig',
        [
            'form'=> $form_candidature->createView()
        ]);
    }
    /**
     * @Route("/mot-de-passe-perdu", name="forgot")
     */
    public function forgot() {

        return $this->render('forgot/forgot.html.twig',
        [
            
        ]);
    }
    /**
     * @Route("/loginform", name="loginform")
     * @param EntityManagerInterface $em
     * @param AuthenticationUtils $auth
     * @return Response
     */
    public function loginform(EntityManagerInterface $em, AuthenticationUtils $auth, Request $request) {
        
        $user_auth = $em->getRepository(User::class)->findOneByEmail($auth->getLastUsername());
        return $this->render('security/loginform.html.twig',
        [
            'full_name' => null !== $user_auth ? $user_auth->getPrenom().' '.$user_auth->getNom() : '',
            'last_username' => $auth->getLastUsername(),
            'hasError' => $auth->getLastAuthenticationError() !== null,
        ]);
    }
    /**
     * @Route("/profile/{state}", name="profil", requirements={"state"="\d+"})
     */
    public function profil($state = false) {
        $compte = false;
        if($this->getUser()) {
           $compte =  $this->getUser()->getTypeAccount();
        }
       
        return $this->render('profil/profil.html.twig',
        [
           'compte'=> $compte 
        ]);
    }
    /**
     * @Route("/mes-annonces", name="annonces")
     */
    public function annonce() {

        return $this->render('annonces/index.html.twig',
        [
            
        ]);
    }
    /**
     * @Route("/gestion-des-candidatures", name="gestion-des-candidatures")
     */
    public function gestion() {

        return $this->render('gestion/index.html.twig',
        [
            
        ]);
    }
     /**
     * @Route("/messagerie", name="messagerie")
     */
    public function messagerie() {
        return $this->render('messagerie/index.html.twig',
        [
            
        ]);
    }
    
     /**
     * @Route("/contacter", name="contacter")
     */
    public function contacter() {
        return $this->render('messagerie/contacter.html.twig',
        [
            
        ]);
    }
    /**
     * @Route("/mon-espace", name="espace")
     */
    public function espace() {
        return $this->render('espace/index.html.twig',
        [
            
        ]);
    }
    /**
     * @Route("/mon-espace/groupe", name="groupe")
     */
    public function groupe() {
        return $this->render('espace/groupe.html.twig',
        [
            
        ]);
    }
    /**
     * @Route("/mon-espace/calendrier", name="calendrier")
     */
    public function calendrier() {
        return $this->render('espace/calendrier.html.twig',
        [
            
        ]);
    }
     /**
     * @Route("/mon-espace/bibliotheque", name="bibliotheques")
     */
    public function bibliotheques() {
        return $this->render('espace/bibliotheque.html.twig',
        [
            
        ]);
    }
    /**
     * @Route("/mon-espace/forum/{exist}", name="forum")
     */
    public function forum($exist = false) {
      
        return $this->render('espace/forum.html.twig',
        [
            'exist'=>$exist
        ]);
    }
     /**
     * @Route("/mon-espace/topic", name="topic")
     */
    public function topic() {
      
        return $this->render('espace/topic.html.twig',
        [
           
        ]);
    }
     /**
     * @Route("/mon-espace/messagerie", name="_messagerie")
     */
    public function _messagerie() {
      
        return $this->render('espace/messagerie.html.twig',
        [
           
        ]);
    }
    /**
     * @Route("/mon-espace/ajouter_un_evenement", name="addevent")
     */
    public function addevent() {
      
        return $this->render('espace/addevenement.html.twig',
        [
           
        ]);
    }
    /**
     * @Route("/mon-espace/membre", name="membre")
     */
    public function membre() {
      
        return $this->render('espace/profile.html.twig',
        [
           
        ]);
    }
    
    /**
     * @Route("/candidature", name="candidature")
     */
    public function candidature() {
        
        return $this->render('candidature/candidature.html.twig',
        [
           
        ]);
    }
    /**
     * @Route("/favoris", name="favoris")
     */
    public function favoris() {
        return $this->render('favoris/index.html.twig',
        [
            
        ]);
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contact() {
        return $this->render('contact/index.html.twig',
        [
            
        ]);
    }
    /**
     * @Route("/bibliotheque", name="bibliotheque")
     */
    public function bibliotheque() {
        return $this->render('biblio/index.html.twig',
        [
            
        ]);
    }
    /**
     * @Route("/header", name="header")
     */
    public function header() {
        return $this->render('headers/index.html.twig',
        [
            
        ]);
    }
    /**
     * @Route("/mon-espace/me", name="me")
     */
    public function me() {
        return $this->render('espace/mon-profile.html.twig',
        [
            
        ]);
    }
}
