<?php

namespace IKNSA\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IKNSAAppBundle:Default:index.html.twig');
    }
}
