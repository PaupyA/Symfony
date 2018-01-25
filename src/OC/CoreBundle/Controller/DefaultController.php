<?php

namespace OC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OCCoreBundle:Default:index.html.twig');
    }

    public function contactAction()
    {
        $this->addFlash('info', "Le forumulaire de contact n'est pas disponible pour le moment, veuillez nous excuser.");

        return $this->redirectToRoute('oc_core_homepage');
    }

}
