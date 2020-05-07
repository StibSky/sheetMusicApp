<?php

namespace App\Repository;

use App\Entity\APIClass;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method APIClass|null find($id, $lockMode = null, $lockVersion = null)
 * @method APIClass|null findOneBy(array $criteria, array $orderBy = null)
 * @method APIClass[]    findAll()
 * @method APIClass[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class APIClassRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, APIClass::class);
    }

    // /**
    //  * @return APIClass[] Returns an array of APIClass objects
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
    public function findOneBySomeField($value): ?APIClass
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
