<?php

namespace App\Controller;

use App\Entity\Admin;
use Sonata\AdminBundle\Form\Type\AdminType;
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

//    /**
//     * @Route("/admin/register", name"adminregister", methods={"GET", "POST"})
//     */
//    public function adminRegisterRoute()
//    {
////        $admin = new Admin();
////        $admin->setRole('ROLE_ADMIN');
////        $form = $this->createForm(AdminType::class, $admin);
//        return $this->render('adminregister.html.twig', [
//            'controller_name' => 'Inscription Admin',
//        ]);
//    }

    /**
     * @Route("/admin/register", name"adminregister", methods={"GET", "POST"})
     */
    public function adminRegisterRoute()
    {
        return $this->render('adminregister.html.twig', [
            'controler_name' => 'Inscription Admin',
        ]);
    }

}
