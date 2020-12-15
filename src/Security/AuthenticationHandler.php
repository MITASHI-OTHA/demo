<?php

namespace App\Security;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;

class AuthenticationHandler implements LogoutSuccessHandlerInterface
{
    private $router;
    private $em;
    private $security;

    public function __construct(UrlGeneratorInterface $router, Security $security, EntityManagerInterface $em)
    {
        $this->router = $router;
        $this->security = $security;
        $this->em = $em;
    }

    public function onLogoutSuccess(Request $request)
    {
        $user = $this->security->getUser();

        if ($user instanceof User && null !== $user) 
        {
            $user->setIsConnected(false);
            $this->em->persist($user);
            $this->em->flush();
            
            $request->getSession()->getFlashBag()->add('success', '<strong>' . $user->getPrenom() . ', </strong>vous avez été déconnecté(e) avec succès.');
        }

        $routeRedirected = $this->router->generate('home');
        return new RedirectResponse($routeRedirected);
    }
}
