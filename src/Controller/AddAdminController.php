<?php

namespace App\Controller;

use App\Entity\Admin;
use App\Form\AdminType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AddAdminController extends AbstractController
{
    /**
* @Route("/admin/register", name="add_register", methods={"GET", "POST"})
*/
    public function index(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $admin = new Admin();
        $admin->setRoles(['ROLE_ADMIN']);
        $form = $this->createForm(AdminType::class, $admin);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $pwd = $passwordEncoder->encodePassword($admin, $admin->getPassword());
            $admin->setPassword($pwd);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($admin);
            $entityManager->flush();

            return $this->redirectToRoute('adminlogin');
        }

        return $this->render('add_admin.html.twig', [
            'controller_name' => 'Inscritpion Admin',
            'form' => $form->createView(),
        ]);
    }
}
