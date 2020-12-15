<?php

namespace App\Repository;

use App\Entity\AdSubscription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AdSubscription|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdSubscription|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdSubscription[]    findAll()
 * @method AdSubscription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdSubscriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AdSubscription::class);
    }

    // /**
    //  * @return AdSubscription[] Returns an array of AdSubscription objects
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
    public function findOneBySomeField($value): ?AdSubscription
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
