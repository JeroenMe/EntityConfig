<?php

namespace Tactics\EntityConfigBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TacticsEntityConfigBundle:Default:index.html.twig', array('name' => $name));
    }
}
