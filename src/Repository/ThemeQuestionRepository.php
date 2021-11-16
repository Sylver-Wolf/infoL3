<?php

namespace App\Repository;

use App\Entity\ThemeQuestion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ThemeQuestion|null find($id, $lockMode = null, $lockVersion = null)
 * @method ThemeQuestion|null findOneBy(array $criteria, array $orderBy = null)
 * @method ThemeQuestion[]    findAll()
 * @method ThemeQuestion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ThemeQuestionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ThemeQuestion::class);
    }

    // /**
    //  * @return ThemeQuestion[] Returns an array of ThemeQuestion objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ThemeQuestion
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
