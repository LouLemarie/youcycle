<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DetailController extends AbstractController
{
    /**
     * @Route("/home/details", name="details")
     */
    public function detailroute()
    {
        return $this->render('details.html.twig', [
            'controller_name' => 'Details',
        ]);
    }
}
