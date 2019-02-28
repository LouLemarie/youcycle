<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/login", name="adminlogin")
     */
    public function adminloginroute()
    {
        return $this->render('adminlogin.html.twig', [
            'controller_name' => 'Connexion Admin',
        ]);
    }

    /**
     * @Route("/admin/dashboard", name="admindashboard")
     */
    public function admindashboardroute()
    {
        return $this->render('admindashboard.html.twig', [
            'controller_name' => 'Dashboard Admin',
        ]);
    }
}
