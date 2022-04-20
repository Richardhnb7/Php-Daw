<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
#[Route('/ejercicio3')]
class Ejercicio3Controller extends AbstractController
{
    public function __construct(private ManagerRegistry $doctrine) {}

    #[Route('/categoria', name: 'consultas_examen')]
    public function DescripCategoria(): Response
    {
        $em = $this->doctrine->getManager();
        $letra1 = 'b';
        $letra2 = 's';
        $consulta = $em->getRepository('App\Entity\Categorias')->findByExpReg($letra1, $letra2);
        return $this->render('templates/findByExpReg.html.twig', [
            'consulta' => $consulta,
        ]);
    }
}
