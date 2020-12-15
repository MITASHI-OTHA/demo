<?php

namespace App\Repository;

use App\Entity\AdFavoris;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AdFavoris|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdFavoris|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdFavoris[]    findAll()
 * @method AdFavoris[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdFavorisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AdFavoris::class);
    }

    // /**
    //  * @return AdFavoris[] Returns an array of AdFavoris objects
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
    public function findOneBySomeField($value): ?AdFavoris
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
