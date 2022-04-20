<?php

namespace App\Repository;

use App\Entity\Productos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Productos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Productos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Productos[]    findAll()
 * @method Productos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Productos::class);
    }

    /**
    * @return Productos[] Returns an array of Productos objects
    */   

    // Consulta relacionada con categorias
    public function findByCategoria($categoria)
    {
        return $this->createQueryBuilder('p')
            ->addSelect('r')
            ->join('p.Categoria','r')
            ->Where('r.id = :val')
            ->setParameter('val', $categoria)
            ->getQuery()
            ->getResult();
        ;
    }

    /*
    public function findOneBySomeField($value): ?Productos
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
