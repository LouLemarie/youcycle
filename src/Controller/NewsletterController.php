<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NewsletterController extends AbstractController
{

    /**
     * @Route("/home/newsletter", name="newsletter")
     */
    public function newsletterroute()
    {
        return $this->render('newsletter.html.twig', [
            'controller_name' => 'Newsletter',
        ]);
    }

    /**
     * @Route("/admin/dashboard/newsletteredit", name="newsletteredit")
     */
    public function newslettereditroute()
    {
        return $this->render('newsletteredit.html.twig', [
            'controller_name' => 'Modification de la Newsletter',
        ]);
    }
}
