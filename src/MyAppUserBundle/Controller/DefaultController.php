<?php

namespace MyAppUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MyAppUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
