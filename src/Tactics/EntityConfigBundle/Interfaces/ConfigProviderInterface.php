<?php

namespace Tactics\EntityConfigBundle\Interfaces;


interface ConfigProviderInterface
{
    public function getConfig($classname);
} 