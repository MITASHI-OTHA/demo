<?php

namespace App\Repository;

use App\Entity\DetailsAd;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DetailsAd|null find($id, $lockMode = null, $lockVersion = null)
 * @method DetailsAd|null findOneBy(array $criteria, array $orderBy = null)
 * @method DetailsAd[]    findAll()
 * @method DetailsAd[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DetailsAdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DetailsAd::class);
    }

    // /**
    //  * @return DetailsAd[] Returns an array of DetailsAd objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DetailsAd
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
