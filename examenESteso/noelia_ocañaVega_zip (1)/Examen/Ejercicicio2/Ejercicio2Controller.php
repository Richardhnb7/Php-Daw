<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;


class Ejercicio2Controller extends AbstractController
{
    public function __construct(private ManagerRegistry $doctrine) {}
    #[Route('/ejercicio2', name: 'ejercicio2')]
    public function index(ManagerRegistry $em): Response
    {
        
        $em = $this->doctrine->getManager();

        $restaurante = 1;
        $by_productos = $em->getRepository('App\Entity\PedidosProductos')->findByProductos($productos);

        return $this->render('ejercicio2/index.html.twig', [
            'consulta' => $by_productos,
        ]);
    }
}
