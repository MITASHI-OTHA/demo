<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ResetPasswordType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;

class ResetPasswordController extends AbstractController
{
    /**
     * @Route("/reset/password/get-email", name="get_email")
     *
     * @return Response
     */
    public function getEmail(): Response
    {
        return $this->render('reset_password/get_email.html.twig', []);
    }   

    /**
     * @Route("/reset/password/lost-password-redirect", name="lost_password_redirect")
     */
    public function lostPasswordRedirect(Request $request, EntityManagerInterface $em, MailerInterface $mailer, TokenGeneratorInterface $tokenGenerator)
    {
        //1 - Vérifier que l'email envoyé est bien enregistré en BDD
        $user = $em->getRepository(User::class)->findOneBy(['email' => $request->get('email')]);
        
        if (!$user) 
        {
            $this->addFlash('errors', '<strong>Désolé !</strong> Il n’existe pas de compte avec cette adresse de messagerie.');

            return $this->render('reset_password/reset_user_password.html.twig', []);
        } 
        else 
        {
            //2 - création du token
            $token = $tokenGenerator->generateToken();

            $user->setConfirmationToken($token);
            $em->persist($user);
            $em->flush();

            $url = $this->generateUrl('reset_lost_password', ['token' => $token], UrlGeneratorInterface::ABSOLUTE_URL);
            
            //3 - On envoi l'email
            if (null !== $user->getConfirmationToken()) 
            {
                $subject = 'Modification du mot de passe oublié';

                $email = (new TemplatedEmail())
                    ->from('no-reply@lescityzens.fr')
                    ->to($user->getEmail())
                    ->subject($subject)

                    // path of the Twig template to render
                    ->htmlTemplate('reset_password/lost_email_brindille.html.twig')

                    // pass variables (name => value) to the template
                    ->context(
                    [
                        //'expiration_date' => new \DateTime('+7 days'),
                        'user' => $user,
                        'url' => $url,
                        'token' => $token,
                    ]);

                $mailer->send($email);

                $this->addFlash('success', '<strong>' . $user->getPrenom() . '</strong>, un mail vous a été envoyé !');

                return $this->redirectToRoute('login');
            }
        }
    }

    /**
     * @Route("/reset/password/lost-password/{token}", name="reset_lost_password")
     */
    public function resetLostPassword(string $token = null, Request $request, UserPasswordEncoderInterface $encoder, EntityManagerInterface $em)
    {
        // vérifier que le token fourni correspond bien à l'email donné
        $user = $em->getRepository(User::class)->findOneByConfirmationToken($token);
        if (null !== $user) $user->setConfirmationToken(null);

        // proposer un formulaire pour saisir le nouveau mot de passe
        $form = $this->createForm(ResetPasswordType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $user->setPassword($encoder->encodePassword($user, $form->get('plainPassword')['first']->getData()));
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', '<strong>' . $user->getPrenom() . '</strong>, votre mot de passe à bien été changé !');

            return $this->redirectToRoute('login');
        }

        return $this->render('reset_password/reset_lost_password.html.twig',
        [
            'form' => $form->createView(),
        ]);
    }
}
