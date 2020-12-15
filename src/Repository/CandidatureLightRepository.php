<?php

namespace App\Repository;

use App\Entity\CandidatureLight;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CandidatureLight|null find($id, $lockMode = null, $lockVersion = null)
 * @method CandidatureLight|null findOneBy(array $criteria, array $orderBy = null)
 * @method CandidatureLight[]    findAll()
 * @method CandidatureLight[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CandidatureLightRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CandidatureLight::class);
    }

	public function getAllCandidatureByAd($names)
	{
		return $this->createQueryBuilder('c')
			->Where('c.Ad = :ad')
			->setParameter('ad', $names)
			->andWhere('c.Status != 0')
			->getQuery()
			->getResult();
	}

	// /**
    //  * @return CandidatureLigth[] Returns an array of CandidatureLigth objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CandidatureLigth
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
