<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

class Ejercicio3Controller extends AbstractController
{
    public function __construct(private ManagerRegistry $doctrine) {}
    #[Route('/ejercicio3', name: 'ejercicio3')]
    public function index(): Response
    {
        $letra='b%s';
        $consulta = $em->getRepository('App\Entity\Categorias')->comienzaPor($letra);
        return $this->render('ejercicio3/index.html.twig', [
            'consulta' => $consulta,
        ]);
    }
}
