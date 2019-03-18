<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/login", name="adminlogin", methods={"GET", "POST"})
     */
    public function adminLoginRoute(Request $request, AuthenticationUtils $authenticationUtils)
    {

        $error = $authenticationUtils->getLastAuthenticationError();

        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('adminlogin.html.twig', [
            'controller_name' => 'Connexion Admin',
            'last_username' => $lastUsername,
            'error' => $error,
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

    public function adminLogoutRoute()
    {
        return $this->redirectToRoute('logout');
    }
}
