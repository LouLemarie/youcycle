<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/login", name="adminlogin", methods={"GET", "POST"})
     */
    public function adminLoginRoute()
    {
        return $this->render('adminlogin.html.twig', [
            'controller_name' => 'Connexion Admin',
        ]);
    }

    /**
     * @Route("/admin/dashboard", name="admindashboard")
     */
    public function adminDashboardRoute()
    {
        return $this->render('admindashboard.html.twig', [
            'controller_name' => 'Dashboard Admin',
        ]);
    }
}
