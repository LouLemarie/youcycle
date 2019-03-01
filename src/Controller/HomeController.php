<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function homeroute()
    {
        return $this->render('accueil.html.twig', [
            'controller_name' => 'Accueil',
        ]);
    }

    /**
     * @Route("/home/map", name="map")
     */
    public function maproute()
    {
        return $this->render('map.html.twig', [
            'controller_name' => 'Map',
        ]);
    }
}
