<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\RestauranteRepository\findByName;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;

class ConsultasController extends AbstractController
{
    public function __construct(private ManagerRegistry $doctrine){}
    #[Route('/consultas', name: 'consultas')]
    public function index(ManagerRegistry $em): Response
    {
        $em= $this->doctrine->getManager();
        $consulta=$em->getRepository('App\Entity\Restaurante')->findAll();
        // $consulta=$em->getRepository('App\Entity\Restaurante')->find(1);
        // $consulta=$em->getRepository('App\Entity\Restaurante')->findOneBy(['correo'=>'casapaco@gmail.com']);
        // $consulta=$em->getRepository('App\Entity\Restaurante')->findBy(['pais'=>'España']);
        
        return $this->render('consultas/index.html.twig', [
            'consulta' => $consulta,
            
        ]);
    }
    #[Route('/consultas1', name: 'consultas1')]
    public function showAction($id){
        $em= $this->doctrine->getManager($id);
        $consulta=$em->getRepository('App\Entity\Restaurante')->find($id);

        if(!$consulta){
            throw $this->createNotFoundException(
                'No se ha encontrado el producto con id: '.$id
            );
        }
        return $this->render('consultas/index.html.twig', array( 
            'consulta' => $consulta,
            
        ));
    }
    #[Route('/consultas2', name: 'consultas2')]
    public function adios(){
        $em= $this->doctrine->getManager();
        $consulta=$em->getRepository('App\Entity\Restaurante')->
        findOneBy(array('pais' =>'españa', 'ciudad'=>'en el medio' ));    
        return $this->render('consultas/index.html.twig', [
            'consulta' => $consulta,
            
        ]);
    }
    #[Route('/consultas3', name: 'consultas3')]
    public function hastaPronto(){
        $em= $this->doctrine->getManager();
        $consulta=$em->getRepository('App\Entity\Restaurante')->findBy(['pais'=>'españa']);
        return $this->render('consultas/index.html.twig', [
            'consulta' => $consulta,
            
        ]);
    }

    #[Route('/consultas4', name: 'consultas4')]
    public function index1(){
        $em= $this->doctrine->getManager();
        
        $consulta=$em->getRepository('App\Entity\Restaurante')->findAll();
        return $this->render('consultas/base.html.twig', [
            
            'consulta' => $consulta,
            
        ]);
    }
     #[Route('/consultas5', name: 'consultas5')]
    public function BuscarNombre(){
        $em= $this->doctrine->getManager();
        $nombre = 1;
        $consulta = $em ->getRepository('App\Entity\Restaurante')->findByName($nombre);
        return $this->render('consultas/base.html.twig', [
            
            'consulta' => $consulta,
        ]);    
    }
    #[Route('/consultas6', name: 'consultas6')]
    public function BuscarLetra(){
        $em= $this->doctrine->getManager();
        $letra = "m";
        $consulta = $em ->getRepository('App\Entity\Restaurante')->findByLetter($letra);
        return $this->render('consultas/base.html.twig', [
            
            'consulta' => $consulta,
        ]);    
    }
    #[Route('/consultas7', name: 'consultas7')]
    public function BuscarCiudad(){
        $em= $this->doctrine->getManager();
        $ciudad = "Jumilla";
        $consulta = $em ->getRepository('App\Entity\Restaurante')->findByCity($ciudad);
        return $this->render('consultas/base.html.twig', [
            
            'consulta' => $consulta,
        ]);    
    }
    #[Route('/consultas8', name: 'consultas8')]
    public function mostrarPedidos(){
        $em= $this->doctrine->getManager();
        $id = 1;
        $consulta = $em ->getRepository('App\Entity\Restaurante')->findByPedidos($id);
        return $this->render('consultas/base.html.twig', [
            
            'consulta' => $consulta,
        ]);    
    }
    

    
   
}

