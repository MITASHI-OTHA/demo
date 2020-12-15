<?php

namespace App\Controller\Admin;

use App\Entity\Role;
use App\Entity\User;
use App\Form\UserType;
use App\Form\RegistrationType;
use App\Entity\UserContactInfos;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UsersController extends AbstractController
{
    /**
     * @Route("/admin/users/list", name="users_list")
     *
     * @param EntityManagerInterface $em
     * @return Response
     */
    public function usersList(EntityManagerInterface $em): Response
    {
        return $this->render('admin/users/users_list.html.twig', 
        [
            'users' => $em->getRepository(User::class)->findAll(),
        ]);
    }

    /**
     * @Route("/admin/add/user", name="add_user")
     *
     * @param EntityManagerInterface $em
     * @return Response
     */
    public function addUser(EntityManagerInterface $em, Request $request, UserPasswordEncoderInterface $encoder): Response
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
            $user->setEnabled(true);
            $user->setPassword($encoder->encodePassword($user, $user->getPassword()));
            $user->setConfirmationToken(null);

            $em->persist($userRole);
            $em->persist($user_contact);
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Le compte de l\'utilisateur <strong>'. $user->getPrenom() .'</strong> a été crée avec succès.');
            
            return $this->redirectToRoute('users_list');
        }

        return $this->render('admin/users/user_crud.html.twig',
        [
            'action' => 'add',
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/update/{user}", name="update_user")
     *
     * @param EntityManagerInterface $em
     * @param Request $request
     * @param User $user
     * @return Response
     */
    public function updateUser(EntityManagerInterface $em, Request $request, User $user): Response
    {
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Les infos de l\'utilisateur <strong>'. $user->getPrenom() .'</strong> ont été modifié avec succès.');

            return $this->redirectToRoute('users_list');
        }

        return $this->render('admin/users/user_crud.html.twig', 
        [
            'action' => 'update',
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/delete/{user}", name="delete_user")
     *
     * @param EntityManagerInterface $em
     * @param User $user
     * @return RedirectResponse
     */
    public function deleteUser(EntityManagerInterface $em, User $user): RedirectResponse
    {
        if (null !== $user && $user instanceof User) 
        {
            $em->remove($user);
            $em->flush();

            $this->addFlash('errors', 'Le compte de l\'utilisateur <strong>' . $user->getPrenom() . '</strong> a été supprimé avec succès.');

            return $this->redirectToRoute('users_list');
        }
    }
}
