<?php

namespace App\Repository;

use App\Entity\AdMessages;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AdMessages|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdMessages|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdMessages[]    findAll()
 * @method AdMessages[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdMessagesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AdMessages::class);
    }

    public function findUserByMessages($appUser)
    {
        return $this->createQueryBuilder('a')
            ->where('a.sender = :app_user OR a.receiver = :app_user')
            ->setParameter('app_user', $appUser)
            ->orderBy('a.sendAt', 'DESC')
            ->groupBy('a.ads')
           // ->addGroupBy('a.sender')
            //->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findByAdAuthor($appUser)
    {
        return $this->createQueryBuilder('a')
            ->where('a.sender = :app_user OR a.receiver = :app_user')
            ->andWhere('a.sender != :app_user')
            ->setParameter('app_user', $appUser)
            ->orderBy('a.sendAt', 'DESC')
            ->groupBy('a.ads')
            ->addGroupBy('a.sender')
            //->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findDiscussionMessages($appUser, $author)
    {
        return $this->createQueryBuilder('a')
            ->where('a.sender = :app_user AND a.receiver = :author')
            ->orWhere('a.sender = :author AND a.receiver = :app_user')
            ->setParameter('app_user', $appUser)
            ->setParameter('author', $author)
            ->orderBy('a.sendAt', 'ASC')
            //->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

    // /**
    //  * @return AdMessages[] Returns an array of AdMessages objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AdMessages
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
