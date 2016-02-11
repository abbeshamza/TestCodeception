<?php

namespace TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TestBundle:Default:index.html.twig');
    }
     public function testAction(Request $request)
    {
    	$name =  $request->request->get('username');
        return $this->render('TestBundle:Default:test.html.twig', array(
            "name" => $name));
    }
}
