<?php

namespace Esprit\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EtudiantController extends Controller
{
    public function indexAction()
    {
        //test second commit
        return $this->render('EspritTestBundle:Etudiant:index.html.twig', array(
            // ...
        ));
    }

}
