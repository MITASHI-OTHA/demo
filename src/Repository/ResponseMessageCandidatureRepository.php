<?php

namespace App\Repository;

use App\Entity\ResponseMessageCandidature;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ResponseMessageCandidature|null find($id, $lockMode = null, $lockVersion = null)
 * @method ResponseMessageCandidature|null findOneBy(array $criteria, array $orderBy = null)
 * @method ResponseMessageCandidature[]    findAll()
 * @method ResponseMessageCandidature[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResponseMessageCandidatureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ResponseMessageCandidature::class);
    }

    // /**
    //  * @return ResponseMessageCandidature[] Returns an array of ResponseMessageCandidature objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ResponseMessageCandidature
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
