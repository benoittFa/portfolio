<?php

namespace App\Repository;

use App\Entity\WebsiteSave;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method WebsiteSave|null find($id, $lockMode = null, $lockVersion = null)
 * @method WebsiteSave|null findOneBy(array $criteria, array $orderBy = null)
 * @method WebsiteSave[]    findAll()
 * @method WebsiteSave[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WebsiteSaveRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WebsiteSave::class);
    }

    // /**
    //  * @return WebsiteSave[] Returns an array of WebsiteSave objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?WebsiteSave
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
