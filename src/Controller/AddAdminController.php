<?php

namespace App\Controller;

use App\Entity\Admin;
use Sonata\AdminBundle\Form\Type\AdminType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AddAdminController extends AbstractController
{
    /**
* @Route("/admin/register", name="add_register", methods={"GET", "POST"})
*/
    public function index()
    {
        $admin = new Admin();
        $admin->setRole("ROLE_ADMIN");
        $form = $this->createForm(AdminType::class, $admin);

        return $this->render('add_admin.html.twig', [
            'controller_name' => 'Inscritpion Admin',
        ]);
    }
}
