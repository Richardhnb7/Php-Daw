<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
#[Route('/ejercicio1')]
class Ejercicio1Controller extends AbstractController
{
    public function __construct(private ManagerRegistry $doctrine) {}
    #[Route('/categoria', name: 'consultas_examen')]
    public function productosCategoria(ManagerRegistry $em)
    {
        $em = $this->doctrine->getManager();
        $categoria = 3;
        $consulta = $em->getRepository('App\Entity\Productos')->findByCategoria($categoria);
        $prods_categoria = $consulta[0]->getCategoria()->getNombre();
        return $this->render('templates/findByCategoria.html.twig', [
            'consulta' => $consulta, 'prods_categoria' => $prods_categoria,
        ]);
    }
}
