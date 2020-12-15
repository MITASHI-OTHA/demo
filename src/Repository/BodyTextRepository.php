<?php

namespace App\Repository;

use App\Entity\BodyText;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BodyText|null find($id, $lockMode = null, $lockVersion = null)
 * @method BodyText|null findOneBy(array $criteria, array $orderBy = null)
 * @method BodyText[]    findAll()
 * @method BodyText[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BodyTextRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BodyText::class);
    }

    // /**
    //  * @return BodyText[] Returns an array of BodyText objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BodyText
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
