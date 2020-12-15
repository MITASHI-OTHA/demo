<?php

namespace App\EntityListener;

use App\Entity\Ad;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\UnitOfWork;
use Doctrine\Persistence\Event\LifecycleEventArgs;


class SetUserAdAuthor
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function prePersist(Ad $ad, LifecycleEventArgs $event)
    {
        if($this->em->getUnitOfWork()->getEntityState($ad) === UnitOfWork::STATE_NEW) 
        {
           $ad->getAuthor()->setIsAdAuthor(true);
           $this->em->persist($ad->getAuthor());
           $this->em->flush();
        }

    }
}
