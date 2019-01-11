<?php

namespace App\Repository;

use App\Entity\Propery;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Propery|null find($id, $lockMode = null, $lockVersion = null)
 * @method Propery|null findOneBy(array $criteria, array $orderBy = null)
 * @method Propery[]    findAll()
 * @method Propery[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProperyRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Propery::class);
    }

    // /**
    //  * @return Propery[] Returns an array of Propery objects
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
    public function findOneBySomeField($value): ?Propery
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
