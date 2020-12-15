<?php

namespace App\Repository;

use App\Entity\PresentationAd;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PresentationAd|null find($id, $lockMode = null, $lockVersion = null)
 * @method PresentationAd|null findOneBy(array $criteria, array $orderBy = null)
 * @method PresentationAd[]    findAll()
 * @method PresentationAd[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PresentationAdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PresentationAd::class);
    }

    // /**
    //  * @return PresentationAd[] Returns an array of PresentationAd objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PresentationAd
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
