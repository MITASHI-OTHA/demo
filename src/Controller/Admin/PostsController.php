<?php

namespace App\Controller\Admin;

use App\Entity\Post;
use App\Form\PostType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostsController extends AbstractController
{
    /**
     * @Route("/admin/posts/list", name="posts_list", methods={"GET"})
     */
    public function postsList(EntityManagerInterface $em)
    {
        return $this->render('admin/posts/posts_list.html.twig', 
        [
            'posts' => $em->getRepository(Post::class)->findBy([], [ 'createdAt' => 'DESC' ]),
        ]);
    }

    /**
     * @Route("/admin/posts/add", name="posts_add")
     *
     * @param EntityManagerInterface $em
     * @param Request $request
     * @return Response
     */
    public function postsAdd(EntityManagerInterface $em, Request $request): Response
    {
        $post = new Post;
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) 
        {
            foreach($post->getContents() as $content) 
            {
                $content->setPosts($post);
                $em->persist($content);
            }

            foreach($post->getImages() as $image) 
            {
                $image->setPosts($post);
                $em->persist($image);
            }

            $em->persist($post);
            $em->flush();

            $this->addFlash('success', "{$this->getUser()->getPrenom()}, le post <strong>{$post->getName()}</strong>, a été ajoutée avec succès.");

            return $this->redirectToRoute('posts_list');
        }

        return $this->render('admin/posts/posts_add_update.html.twig', 
        [
            'action' => 'add',
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/posts/update/{post<\d+>}", name="posts_update")
     *
     * @param Post $post
     * @param EntityManagerInterface $em
     * @param Request $request
     * @return Response
     */
    public function postsUpdate(Post $post, EntityManagerInterface $em, Request $request): Response
    {
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) 
        {
            foreach ($post->getContents() as $content) 
            {
                $content->setPosts($post);
                $em->persist($content);
            }

            foreach ($post->getImages() as $image) 
            {
                $image->setPosts($post);
                $em->persist($image);
            }
            
            $em->persist($post);
            $em->flush();

            $this->addFlash('success', "{$this->getUser()->getPrenom()}, le post <strong>{$post->getName()}</strong>, a été modifiée avec succès.");

            return $this->redirectToRoute('posts_list');
        }

        return $this->render('admin/posts/posts_add_update.html.twig', 
        [
            'action' => 'update',
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/posts/delete/{post<\d+>}", name="posts_delete")
     *
     * @param Post $post
     * @param EntityManagerInterface $em
     * @return RedirectResponse
     */
    public function postsDelete(Post $post, EntityManagerInterface $em): RedirectResponse
    {
        if($post instanceof Post && null !== $post) 
        {
            $em->remove($post);
            $em->flush();

            $this->addFlash('success', "{$this->getUser()->getPrenom()}, le post <strong>{$post->getName()}</strong>, a été supprimée avec succès.");

            return $this->redirectToRoute('posts_list');
        }

    }
}
