<?php

namespace App\Repository;

use App\Entity\MotivationParticipation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MotivationParticipation|null find($id, $lockMode = null, $lockVersion = null)
 * @method MotivationParticipation|null findOneBy(array $criteria, array $orderBy = null)
 * @method MotivationParticipation[]    findAll()
 * @method MotivationParticipation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MotivationParticipationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MotivationParticipation::class);
    }

    // /**
    //  * @return MotivationParticipation[] Returns an array of MotivationParticipation objects
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
    public function findOneBySomeField($value): ?MotivationParticipation
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
