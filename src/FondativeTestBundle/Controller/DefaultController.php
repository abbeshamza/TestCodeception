<?php

namespace FondativeTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FondativeTestBundle:Default:index.html.twig');
    }
}
