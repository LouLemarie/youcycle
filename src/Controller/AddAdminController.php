<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AddAdminController extends AbstractController
{
    /**
* @Route("/admin/dashboard/addadmin", name="add_admin")
*/
    public function index()
    {
        return $this->render('add_admin.html.twig', [
            'controller_name' => 'AddAdminController',
        ]);
    }
}
