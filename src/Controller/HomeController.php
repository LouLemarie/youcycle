<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\UrlPackage;
use Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function homeroute()
    {
        return $this->render('accueil.html.twig', [
            'controller_name' => 'Accueil',
        ]);
    }

    /**
     * @Route("/map", name="map")
     */
    public function maproute()
    {
        return $this->render('map.html.twig', [
            'controller_name' => 'Map',
        ]);
    }
}
