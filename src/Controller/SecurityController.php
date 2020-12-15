<?php

namespace App\Controller;

use App\Entity\Role;
use App\Entity\User;
use App\Form\RegistrationType;
use App\Entity\UserContactInfos;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/registration", name="registration")
     *
     * @param EntityManagerInterface $em
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @param TokenGeneratorInterface $tokenGenerator
     * @return void
     */
    public function registration(EntityManagerInterface $em, Request $request, UserPasswordEncoderInterface $encoder, TokenGeneratorInterface $tokenGenerator)
    {
        $user = new User;
        $userRole = new Role;
        $user_contact = new UserContactInfos;
        $form = $this->createForm(RegistrationType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $userRole->setName('ROLE_USER');
            $user->addUserRole($userRole);

            $user_contact->setAvatar('default_avatar');
            $user->setUserContactInfos($user_contact);
            $user->setEnabled(false);
            $user->setPassword($encoder->encodePassword($user, $user->getPassword()));

            $token = $tokenGenerator->generateToken();
            $user->setConfirmationToken($token);

            $em->persist($userRole);
            $em->persist($user_contact);
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('inscriptions');
        }

        return $this->render('security/user_registration.html.twig',
        [
            'form' => $form->createView()
        ]);
    }
 
    /**
     * @Route("/account/confirm/{token}", name="confirm_account")
     *
     * @param [type] $token
     * @param EntityManagerInterface $em
     * @return Response
     */
    public function confirmAccount($token = null, EntityManagerInterface $em): Response
    {
        $user = $em->getRepository(User::class)->findOneByConfirmationToken($token);
        $tokenExist = $user->getConfirmationToken();

        if ($token === $tokenExist) 
        {
            $user->setConfirmationToken(null);
            $user->setEnabled(true);

            $em->persist($user);
            $em->flush();

            $this->addFlash('success', '<strong>' . $user->getPrenom() . ',</strong> votre compte vient d\'être activé avec succès. Veuillez vous connecter.');
            return $this->redirectToRoute('login');
        }
    }

    /**
     * @Route("/login", name="login")
     *
     * @param EntityManagerInterface $em
     * @param AuthenticationUtils $auth
     * @return Response
     */
    public function login(EntityManagerInterface $em, AuthenticationUtils $auth, Request $request): Response 
    {
        $user_auth = $em->getRepository(User::class)->findOneByEmail($auth->getLastUsername());

        if($request->isXmlHttpRequest()) 
        {
            return new JsonResponse(
            [
                'full_name' => null !== $user_auth ? $user_auth->getPrenom().' '.$user_auth->getNom() : '',
                'last_username' => $auth->getLastUsername(),
                'hasError' => $auth->getLastAuthenticationError() !== null,
            ], 200);
        }

        return $this->render('security/login.html.twig',
        [
            'full_name' => null !== $user_auth ? $user_auth->getPrenom().' '.$user_auth->getNom() : '',
            'last_username' => $auth->getLastUsername(),
            'hasError' => $auth->getLastAuthenticationError() !== null,
        ]);
    }

    /**
     * @Route("/logout", name="logout")
     *
     * @return void
     */
    public function logout() {}

}
