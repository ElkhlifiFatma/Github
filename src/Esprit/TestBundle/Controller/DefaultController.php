<?php

namespace Esprit\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspritTestBundle:Default:index.html.twig');
    }
}
