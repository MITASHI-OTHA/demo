<?php

namespace App\Repository;

use App\Entity\LogementDesire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LogementDesire|null find($id, $lockMode = null, $lockVersion = null)
 * @method LogementDesire|null findOneBy(array $criteria, array $orderBy = null)
 * @method LogementDesire[]    findAll()
 * @method LogementDesire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LogementDesireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LogementDesire::class);
    }

    // /**
    //  * @return LogementDesire[] Returns an array of LogementDesire objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LogementDesire
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
