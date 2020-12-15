<?php

namespace App\Controller;

use App\Form\ProfileType;
use App\Services\UploadAvatar;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserProfileController extends AbstractController
{
    /**
     * @Route("/user/profile", name="user_profile")
     *
     * @param EntityManagerInterface $em
     * @param Request $request
     * @return Response
     */
    public function userProfile(EntityManagerInterface $em, Request $request): Response
    {
        $form = $this->createForm(ProfileType::class, $this->getUser());
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) 
        {
            $em->persist($this->getUser());
            $em->flush();

            $this->addFlash('success', '<strong>'. $this->getUser()->getPrenom() .', </strong> les informations de votre compte ont été modifiées avec succès.');

            return $this->redirectToRoute('user_profile');
        }

        return $this->render('user/user_profile.html.twig', 
        [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/profile/add/avatar", name="image", methods={"POST"}, options={"expose"=true})
     *
     * @param Request $request
     * @param UploadAvatar $uploadService
     * @param EntityManagerInterface $manager
     * @return JsonResponse
     */
    public function addAvatar(Request $request, UploadAvatar $uploadService, EntityManagerInterface $manager): JsonResponse
    {
        if ($request->isXmlHttpRequest()) 
        {
            $user = $this->getUser();
            $avatar = $user->getUserContactInfos()->getAvatar();

            $file = new UploadedFile($_FILES['file']['tmp_name'], $_FILES['file']['name'], $_FILES['file']['type'], $_FILES['file']['error']);

            if (null !== $avatar) 
            {
                $uploadService->removeFile($avatar);

                if ($file) 
                {
                    $file_name = $uploadService->uploadFile($file);
                    // Persist to Database
                    $user->getUserContactInfos()->setAvatar($file_name);
                    $manager->flush();
                }
            }

            return new JsonResponse($file_name);
        }
    }
}
