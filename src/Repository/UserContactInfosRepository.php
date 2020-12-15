<?php

namespace App\Repository;

use App\Entity\UserContactInfos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserContactInfos|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserContactInfos|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserContactInfos[]    findAll()
 * @method UserContactInfos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserContactInfosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserContactInfos::class);
    }

    // /**
    //  * @return UserContactInfos[] Returns an array of UserContactInfos objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserContactInfos
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
