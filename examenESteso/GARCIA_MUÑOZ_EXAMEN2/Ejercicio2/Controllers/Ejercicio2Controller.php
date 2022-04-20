<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

#[Route('/ejercicio2')]
class Ejercicio2Controller extends AbstractController
{
    public function __construct(private ManagerRegistry $doctrine) {}

    #[Route('/producto', name: 'consultas_particulares4')]
    public function unidadesPedidosProductos(ManagerRegistry $em)
    {
        $em = $this->doctrine->getManager();
        $producto = 1;
        $consulta = $em->getRepository('App\Entity\PedidosProductos')->findByProducto($producto);
        $unidades_ped_prod = $consulta[0]->getProducto()->getNombre();
        return $this->render('templates/findByProducto.html.twig', [
            'consulta' => $consulta, 'unidades_ped_prod' => $unidades_ped_prod,
        ]);
    }
}
