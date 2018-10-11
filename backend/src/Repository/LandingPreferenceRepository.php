<?php

namespace App\Repository;

use App\Entity\LandingPreference;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LandingPreference|null find($id, $lockMode = null, $lockVersion = null)
 * @method LandingPreference|null findOneBy(array $criteria, array $orderBy = null)
 * @method LandingPreference[]    findAll()
 * @method LandingPreference[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LandingPreferenceRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LandingPreference::class);
    }

//    /**
//     * @return LandingPreference[] Returns an array of LandingPreference objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LandingPreference
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
