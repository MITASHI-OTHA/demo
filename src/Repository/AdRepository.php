<?php

namespace App\Repository;

use App\Entity\Ad;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Ad|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ad|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ad[]    findAll()
 * @method Ad[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ad::class);
    }

    public function findAdsByCriteria($typeProjet = null, $typo = null, $avancementProjet = null, $state = null, $dateLivraison = null, $minPrice = null, $maxPrice = null): array
    {
        $qb = $this->createQueryBuilder('a');

        if (null !== $typeProjet) 
        {
            $qb->select('a', 't')
                ->leftJoin('a.typeProjet', 't')
                ->where('t.parent = :parent')
                ->setParameter('parent', $typeProjet);
        }

        if (null !== $typo) 
        {
            $qb->andWhere($qb->expr()->like('a.typologie', ':typologie'))
            ->setParameter('typologie', '%'. $typo .'%')
            ->orderBy('a.id', 'DESC');
        }

        if (null !== $avancementProjet) 
        {
            $qb->andWhere('a.etatAvancementProjet = :etatAvancementProjet')
            ->setParameter('etatAvancementProjet', $avancementProjet)
            ->orderBy('a.id', 'DESC');
        }

        if (null !== $minPrice) 
        {
            $qb->andWhere('a.prix >= :min_price')
            ->setParameter('min_price', $minPrice)
            ->orderBy('a.id', 'DESC');
        }

        if (null !== $maxPrice) 
        {
            $qb->andWhere('a.prix <= :max_price')
            ->setParameter('max_price', $maxPrice)
            ->orderBy('a.id', 'DESC');
        }

        if (null !== $state) 
        {
            $qb ->select('a', 'p')
                ->leftJoin('a.presentationProjet', 'p')
                ->andWhere('p.ville = :ville')
                ->setParameter('ville', $state);
        }
        
        if (null !== $dateLivraison) {
            //dd($dateLivraison->format('Y'));
            $qb ->andWhere('YEAR(a.dateLivraison) >= :datelivraison')
                ->setParameter('datelivraison', $dateLivraison->format('Y'))
                ->andWhere('YEAR(a.dateLivraison) <= :dateEnd')
                ->setParameter('dateEnd', $dateLivraison->format('Y'))
                ->orderBy('a.id', 'DESC');
        }

        return  $qb
            ->getQuery()
            ->getResult();
    }

    // /**
    //  * @return Ad[] Returns an array of Ad objects
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
    public function findOneBySomeField($value): ?Ad
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