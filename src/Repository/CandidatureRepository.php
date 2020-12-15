<?php

namespace App\Repository;

use App\Entity\Candidature;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Candidature|null find($id, $lockMode = null, $lockVersion = null)
 * @method Candidature|null findOneBy(array $criteria, array $orderBy = null)
 * @method Candidature[]    findAll()
 * @method Candidature[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CandidatureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Candidature::class);
    }

	/**
	 * @param $Author
	 * @param $names
	 * @return Candidature[] Returns an array of Candidature objects
	 */

    public function findCandidature($Author, $names)
    {
        return $this->createQueryBuilder('c')
            ->Where('c.name = :name')
	        ->setParameter('name', "candidature_".$names)

	        ->andWhere('c.Author = :auth')
	        ->setParameter('auth', $Author)

            ->getQuery()
            ->getResult();
    }

    public function getAllCandidatureByAd($names)
    {
        return $this->createQueryBuilder('c')
            ->Where('c.ad = :ad')
	        ->setParameter('ad', $names)
	        ->andWhere('c.status != 0')
            ->getQuery()
            ->getResult();
    }

    /*
    public function findOneBySomeField($value): ?Candidature
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
