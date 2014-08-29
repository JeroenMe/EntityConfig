<?php

namespace Tactics\EntityConfigBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Tactics\EntityConfigBundle\EntityConfig\ConfigProvider;

class GenerateShowCommand extends ContainerAwareCommand
{
    public function configure()
    {
        $this->setName("generate:show");
        $this->setDescription("This will generate show template for classname");
        $this->addArgument('classname', InputArgument::REQUIRED, 'This is the class for which a show will be generated');
    }
    
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $classname = $input->getArgument('classname');
        $config = new ConfigProvider();
        $config = $config->getConfig($classname);
    }
} 