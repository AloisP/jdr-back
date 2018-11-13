<?php

namespace App\Repository;

use App\Entity\PersonnageEquipement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PersonnageEquipement|null find($id, $lockMode = null, $lockVersion = null)
 * @method PersonnageEquipement|null findOneBy(array $criteria, array $orderBy = null)
 * @method PersonnageEquipement[]    findAll()
 * @method PersonnageEquipement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PersonnageEquipementRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PersonnageEquipement::class);
    }

    // /**
    //  * @return PersonnageEquipement[] Returns an array of PersonnageEquipement objects
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
    public function findOneBySomeField($value): ?PersonnageEquipement
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
