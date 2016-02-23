<?php

namespace Master\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $name = "Greg";
        // replace this example code with whatever you need
        return $this->render('ProjectBundle:Default:index.html.twig', array(
        'name' => $name));
    }
}
