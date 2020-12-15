<?php

namespace App\EventSubscriber;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class UserActivitySubscriber implements EventSubscriberInterface
{
    private $em;
    private $security;

    public function __construct(EntityManagerInterface $em, Security $security)
    {
        $this->em = $em;
        $this->security = $security;
    }

    public static function getSubscribedEvents()
    {
        return
        [
            KernelEvents::TERMINATE =>
            [
                ['onLastActivity', 20],
            ],
        ];
    }

    public function onLastActivity()
    {
        $user = $this->security->getUser();

        if (($user instanceof User) && !($user->isActiveNow())) 
        {
            $user->setLastActivityAt(new \DateTime);
            $this->em->flush($user);
        }
    }
}
