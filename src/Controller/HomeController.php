<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Config\FileLocator;

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
        $directory = $this->getParameter('kernel.root_dir') . '/Repository/json';
        $fileLocator = new FileLocator($directory);
        $jsonFiles = $fileLocator->locate('bennes.geojson', null, false);

        dump($jsonFiles);



        return $this->render('map.html.twig', [
            'controller_name' => 'Map',
            'link' => $jsonFiles[0],
        ]);
    }
}
