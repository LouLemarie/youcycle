<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/login", name="adminlogin", methods={"GET", "POST"})
     */
    public function adminLoginRoute(AuthenticationUtils $authenticationUtils) : Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();

        $lastEmail = $authenticationUtils->getLastUsername();

        dump($error);
        dump($lastEmail);

        return $this->render('adminlogin.html.twig', [
            'controller_name' => 'Connexion Admin',
            'last_email' => $lastEmail,
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

    /**
     * deconnexion symfony
     *
     * @Route("logout", name="security_logout")
     */
    public function logout():void
    {
        throw new \Exception('ne sera jamais rejoin déconnexion gere par symfony');
    }

}
