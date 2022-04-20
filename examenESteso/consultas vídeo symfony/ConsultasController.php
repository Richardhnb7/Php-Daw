<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

class ConsultasController extends AbstractController
{
    public function __construct(private ManagerRegistry $doctrine) {}
    #[Route('/consultas_findAll', name: 'consultas')]
    public function index(ManagerRegistry $em): Response
    {
        $em = $this->doctrine->getManager();
        
        return $this->render('consultas/findAll.twig', [
            'restaurantes' => $em->getRepository('App\Entity\Restaurante')->findAll(),
            'pedidos' => $em->getRepository('App\Entity\Pedidos')->findAll(),
        ]);
    }

    #[Route('/consultas_findBy', name: 'consultas2')]
    public function index2(ManagerRegistry $em): Response
    {
        $em = $this->doctrine->getManager();

        $clave = "1234";
        $by_key = $em->getRepository('App\Entity\Restaurante')->findByKey($clave);
        $letra = "c";
        $by_letter = $em->getRepository('App\Entity\Restaurante')->findByLetter($letra);
        $ciudad = "Madrid";
        $by_city = $em->getRepository('App\Entity\Restaurante')->findByCity($ciudad);
        $cp = 20000;
        $by_cp = $em->getRepository('App\Entity\Restaurante')->findByCp($cp);
        
        return $this->render('consultas/findBy.twig', [
            'by_key' => $by_key,
            'by_letter' => $by_letter,
            'by_city' => $by_city,
            'by_cp' => $by_cp,
            'by_order' => $em->getRepository('App\Entity\Restaurante')->findByOrder(1),
        ]);
    }
}