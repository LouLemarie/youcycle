<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DetailController extends AbstractController
{
    /**
     * @Route("/home/detail", name="detail")
     */
    public function index()
    {
        return $this->render('detail.html.twig', [
            'controller_name' => 'Details',
        ]);
    }
}
