<?php

namespace App\Repository;

use App\Entity\CategorieLink;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CategorieLink|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategorieLink|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategorieLink[]    findAll()
 * @method CategorieLink[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategorieLinkRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategorieLink::class);
    }

    // /**
    //  * @return CategorieLink[] Returns an array of CategorieLink objects
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
    public function findOneBySomeField($value): ?CategorieLink
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
