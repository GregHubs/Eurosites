<?php

namespace EurositesBundle\Controller;

use Master\ProjectBundle\Controller\DefaultController as ProjectController;

class DefaultController extends ProjectController
{
    public function indexAction()
    {
        $response = parent::IndexAction();


        return $response;
    }
}
