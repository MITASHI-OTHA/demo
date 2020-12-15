<?php

namespace App\Repository;

use App\Entity\ActorAd;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ActorAd|null find($id, $lockMode = null, $lockVersion = null)
 * @method ActorAd|null findOneBy(array $criteria, array $orderBy = null)
 * @method ActorAd[]    findAll()
 * @method ActorAd[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActorAdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ActorAd::class);
    }

    // /**
    //  * @return ActorAd[] Returns an array of ActorAd objects
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
    public function findOneBySomeField($value): ?ActorAd
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
