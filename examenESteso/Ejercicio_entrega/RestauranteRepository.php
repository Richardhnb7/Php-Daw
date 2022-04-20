<?php

namespace App\Repository;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpKernel\Bundle\Bundle;
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

    
     //@return Restaurante[] Returns an array of Restaurante objects
     
    
    public function findByName($value)
    {
       
        return $this-> createQueryBuilder('r')
            ->andWhere('r.id = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();
        
    }
    public function findByLetter($letra){
        return $this-> createQueryBuilder('r')
            ->andWhere('r.correo LIKE :val')
            ->setParameter('val', $letra.'%')
            ->orderBy('r.correo', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();
    }
    public function findByCity($ciudad){
        return $this-> createQueryBuilder('r')
            ->andWhere('r.ciudad = :val')
            ->setParameter('val', $ciudad)
            ->orderBy('r.correo', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();
    }
    public function findByC($ciudad){
        return $this-> createQueryBuilder('r')
            ->andWhere('r.ciudad = :val')
            ->setParameter('val', $ciudad)
            ->orderBy('r.correo', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();
    }
    
     //funcion con join que enlaza con el video de consultas
     //tengo dos ids el 1 con casapaco@gmail.com 
     // otro con el id3 con mariadelao@gmail.com
     //he comprobado los dos y funcionan correctamente añadiendo este ultimo a pedidos
    public function findByPedidos($pedido){
        return $this-> createQueryBuilder('res')
            ->addSelect('t')
            ->join('res.pedidos','t')
            ->Where('t.id= :val')
            ->setParameter('val',$pedido)
            ->getQuery()
            ->getResult();
    }
    
    /*
    public function findOneBySomeField($value): ?Restaurante
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    
    
    
    
    
        
    
}


