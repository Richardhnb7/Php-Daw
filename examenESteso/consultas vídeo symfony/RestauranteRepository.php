<?php

namespace App\Repository;

use App\Entity\Restaurante;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Restaurante|null find($id, $lockMode = null, $lockVersion = null)
 * @method Restaurante|null findOneBy(array $criteria, array $orderBy = null)
 * @method Restaurante[]    findAll()
 * @method Restaurante[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RestauranteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Restaurante::class);
    }

    /**
    * @return Restaurante[] Returns an array of Restaurante objects
    */
    
    public function findByKey($key)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.Clave = :val')
            ->setParameter('val', $key)
            ->orderBy('r.Correo', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }
    public function findByLetter($letter)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.Correo LIKE :val')
            ->setParameter('val', $letter.'%')
            ->orderBy('r.Correo', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }
    public function findByCity($city)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.Ciudad = :val')
            ->setParameter('val', $city)
            ->orderBy('r.Correo', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }
    public function findByCp($cp)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.Cp > :val')
            ->setParameter('val', $cp)
            ->orderBy('r.Cp', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }
    /**
     * @return Restaurante[] Return an array of Restaurante objects
     */
    public function findByOrder($order){
        return $this->createQueryBuilder('r')
            ->addSelect('p')
            ->join('r.id', 'p')
            ->Where('p.Restaurante = :val')
            ->setParameter('val', $order)
            ->getQuery()
            ->getResult();
    }
}
