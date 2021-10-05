<?php

namespace App\Repository;

use App\Entity\IncroyableBob;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method IncroyableBob|null find($id, $lockMode = null, $lockVersion = null)
 * @method IncroyableBob|null findOneBy(array $criteria, array $orderBy = null)
 * @method IncroyableBob[]    findAll()
 * @method IncroyableBob[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IncroyableBobRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IncroyableBob::class);
    }

    // /**
    //  * @return IncroyableBob[] Returns an array of IncroyableBob objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?IncroyableBob
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
