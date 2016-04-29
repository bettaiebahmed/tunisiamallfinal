<?php

namespace TunisiaMall\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function adminAction()
    {
        return $this->render('TunisiaMallAdministrationBundle::administrateur.html.twig');
    }
     public function responsableAction()
    {
        return $this->render('TunisiaMallAdministrationBundle::responsable.html.twig');
    }
}
