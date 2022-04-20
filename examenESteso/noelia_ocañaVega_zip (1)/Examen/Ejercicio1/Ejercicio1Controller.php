<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

class Ejercicio1Controller extends AbstractController
{
    public function __construct(private ManagerRegistry $doctrine) {}
    #[Route('/ejercicio1', name: 'ejercicio1')]
    public function index(ManagerRegistry $em): Response
    {
        $id = 1;
        $total = $em->getRepository('App\Entity\Productos')->findByCategoria($id);
        return $this->render('ejercicio1/index.html.twig', [
            'consulta' => $total,
        ]);
    }
    
}
