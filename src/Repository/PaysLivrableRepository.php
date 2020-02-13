<?php

namespace App\Repository;

use App\Entity\PaysLivrable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PaysLivrable|null find($id, $lockMode = null, $lockVersion = null)
 * @method PaysLivrable|null findOneBy(array $criteria, array $orderBy = null)
 * @method PaysLivrable[]    findAll()
 * @method PaysLivrable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaysLivrableRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PaysLivrable::class);
    }

    // /**
    //  * @return PaysLivrable[] Returns an array of PaysLivrable objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PaysLivrable
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
