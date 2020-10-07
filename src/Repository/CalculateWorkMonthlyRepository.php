<?php

namespace App\Repository;

use App\Entity\CalculateWorkMonthly;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CalculateWorkMonthly|null find($id, $lockMode = null, $lockVersion = null)
 * @method CalculateWorkMonthly|null findOneBy(array $criteria, array $orderBy = null)
 * @method CalculateWorkMonthly[]    findAll()
 * @method CalculateWorkMonthly[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CalculateWorkMonthlyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CalculateWorkMonthly::class);
    }

    // /**
    //  * @return CalculateWorkMonthly[] Returns an array of CalculateWorkMonthly objects
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
    public function findOneBySomeField($value): ?CalculateWorkMonthly
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
