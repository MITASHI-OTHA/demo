<?php

namespace App\Repository;

use App\Entity\MediaAds;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MediaAds|null find($id, $lockMode = null, $lockVersion = null)
 * @method MediaAds|null findOneBy(array $criteria, array $orderBy = null)
 * @method MediaAds[]    findAll()
 * @method MediaAds[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MediaAdsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MediaAds::class);
    }

    // /**
    //  * @return MediaAds[] Returns an array of MediaAds objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MediaAds
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
