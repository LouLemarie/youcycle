<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    /**
     * @Route("admin/dashboard/profil", name="profil")
     */
    public function profilroute()
    {
        return $this->render('profil.html.twig', [
            'controller_name' => 'Profil',
        ]);
    }

    /**
     * @Route("admin/dashboard/profil/updateprofil", name="updateprofil")
     */
    public function updateprofilroute()
    {
        return $this->render('updateprofil.html.twig', [
            'controller_name' => 'Modification du Profil',
        ]);
    }
}
