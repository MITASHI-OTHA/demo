<?php

namespace App\Repository;

use App\Entity\AdActeursOperation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AdActeursOperation|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdActeursOperation|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdActeursOperation[]    findAll()
 * @method AdActeursOperation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdActeursOperationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AdActeursOperation::class);
    }

    // /**
    //  * @return AdActeursOperation[] Returns an array of AdActeursOperation objects
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
    public function findOneBySomeField($value): ?AdActeursOperation
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
