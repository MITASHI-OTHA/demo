<?php

namespace App\Repository;

use App\Entity\SituationProfessionnelFinanciere;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SituationProfessionnelFinanciere|null find($id, $lockMode = null, $lockVersion = null)
 * @method SituationProfessionnelFinanciere|null findOneBy(array $criteria, array $orderBy = null)
 * @method SituationProfessionnelFinanciere[]    findAll()
 * @method SituationProfessionnelFinanciere[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SituationProfessionnelFinanciereRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SituationProfessionnelFinanciere::class);
    }

    // /**
    //  * @return SituationProfessionnelFinanciere[] Returns an array of SituationProfessionnelFinanciere objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SituationProfessionnelFinanciere
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
