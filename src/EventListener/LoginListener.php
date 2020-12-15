<?php

namespace App\EventListener;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;

class LoginListener 
{
    private $manager;

    public function __construct(EntityManagerInterface $manager) 
    {
        $this->manager = $manager;
    }

    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event) 
    {
        $user = $event->getAuthenticationToken()->getUser();
        //dd($event);
        
        if($user instanceof User) 
        {
            $user->setLastLogin(new \DateTime);
            $user->setIsConnected(true);
            $this->manager->persist($user);
            $this->manager->flush();
        } 

    }

}