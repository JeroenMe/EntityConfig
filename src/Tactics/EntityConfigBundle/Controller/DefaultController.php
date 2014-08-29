<?php

namespace Tactics\EntityConfigBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tactics\EntityConfigBundle\Entity\Person;
use Tactics\EntityConfigBundle\EntityConfig\ConfigProvider;

class DefaultController extends Controller
{
    public function showAction(Person $person)
    {
        $provider = new ConfigProvider();

        return $this->render('TacticsEntityConfigBundle:Default:show.html.twig', array('c' => $provider->getConfig($person)));
    }
}
