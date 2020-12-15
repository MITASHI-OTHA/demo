<?php

namespace App\Repository;

use App\Entity\AcquereurCandidature;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AcquereurCandidature|null find($id, $lockMode = null, $lockVersion = null)
 * @method AcquereurCandidature|null findOneBy(array $criteria, array $orderBy = null)
 * @method AcquereurCandidature[]    findAll()
 * @method AcquereurCandidature[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AcquereurCandidatureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AcquereurCandidature::class);
    }

    // /**
    //  * @return AcquereurCandidature[] Returns an array of AcquereurCandidature objects
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
    public function findOneBySomeField($value): ?AcquereurCandidature
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
