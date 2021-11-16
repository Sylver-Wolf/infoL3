<?php

namespace App\Repository;

use App\Entity\DifficulteQuestion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DifficulteQuestion|null find($id, $lockMode = null, $lockVersion = null)
 * @method DifficulteQuestion|null findOneBy(array $criteria, array $orderBy = null)
 * @method DifficulteQuestion[]    findAll()
 * @method DifficulteQuestion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DifficulteQuestionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DifficulteQuestion::class);
    }

    // /**
    //  * @return DifficulteQuestion[] Returns an array of DifficulteQuestion objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DifficulteQuestion
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
