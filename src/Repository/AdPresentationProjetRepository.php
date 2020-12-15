<?php

namespace App\Repository;

use App\Entity\AdPresentationProjet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AdPresentationProjet|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdPresentationProjet|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdPresentationProjet[]    findAll()
 * @method AdPresentationProjet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdPresentationProjetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AdPresentationProjet::class);
    }

    // /**
    //  * @return AdPresentationProjet[] Returns an array of AdPresentationProjet objects
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
    public function findOneBySomeField($value): ?AdPresentationProjet
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
