<?php

namespace App\Repository;

use App\Entity\AddWork;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AddWork|null find($id, $lockMode = null, $lockVersion = null)
 * @method AddWork|null findOneBy(array $criteria, array $orderBy = null)
 * @method AddWork[]    findAll()
 * @method AddWork[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AddWorkRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AddWork::class);
    }

    // /**
    //  * @return AddWork[] Returns an array of AddWork objects
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
    public function findOneBySomeField($value): ?AddWork
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
