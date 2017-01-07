<?php

namespace Ceant\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CeantAdminBundle:Default:index.html.twig');
    }
}
