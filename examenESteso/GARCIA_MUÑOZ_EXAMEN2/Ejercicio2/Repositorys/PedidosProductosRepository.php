<?php

namespace App\Repository;

use App\Entity\PedidosProductos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PedidosProductos|null find($id, $lockMode = null, $lockVersion = null)
 * @method PedidosProductos|null findOneBy(array $criteria, array $orderBy = null)
 * @method PedidosProductos[]    findAll()
 * @method PedidosProductos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PedidosProductosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PedidosProductos::class);
    }

    /**
    * @return PedidosProductos[] Returns an array of PedidosProductos objects
    */
    // 
    public function findByProducto($producto)
    {
        return $this->createQueryBuilder('p')
            ->addSelect('r')
            ->join('p.Producto','r')
            ->Where('r.id = :val')
            ->setParameter('val', $producto)
            ->getQuery()
            ->getResult();
        ;
    }
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
    public function findOneBySomeField($value): ?PedidosProductos
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
