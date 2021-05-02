<?php

namespace App\Repository;

use App\Entity\SetPoint;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SetPoint|null find($id, $lockMode = null, $lockVersion = null)
 * @method SetPoint|null findOneBy(array $criteria, array $orderBy = null)
 * @method SetPoint[]    findAll()
 * @method SetPoint[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SetPointRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SetPoint::class);
    }

    // /**
    //  * @return SetPoint[] Returns an array of SetPoint objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SetPoint
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
