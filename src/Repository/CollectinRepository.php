<?php

namespace App\Repository;

use App\Entity\Collectin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Collectin|null find($id, $lockMode = null, $lockVersion = null)
 * @method Collectin|null findOneBy(array $criteria, array $orderBy = null)
 * @method Collectin[]    findAll()
 * @method Collectin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CollectinRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Collectin::class);
    }

    // /**
    //  * @return Collectin[] Returns an array of Collectin objects
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
    public function findOneBySomeField($value): ?Collectin
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
