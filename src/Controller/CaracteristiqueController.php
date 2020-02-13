<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CaracteristiqueController extends AbstractController
{
    /**
     * @Route("/caracteristique", name="caracteristique")
     */
    public function index()
    {
        return $this->render('caracteristique/index.html.twig', [
            'controller_name' => 'CaracteristiqueController',
        ]);
    }
}
