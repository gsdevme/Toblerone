<?php

namespace Toblerone\Console;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\Console\Application as SymfonyApplication;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher;
use Symfony\Component\EventDispatcher\GenericEvent;

class Application extends SymfonyApplication
{
    /** @var \Symfony\Component\DependencyInjection\ContainerBuilder */
    private $container;
    private $containerLoader;
    private $dispatcher;

    /**
     * @inheritdoc
     */
    public function __construct($version)
    {
        set_error_handler(function ($errno, $errstr, $errfile, $errline) {
            throw new \ErrorException($errstr, 0, $errno, $errfile, $errline);
        });

        $this->container  = new ContainerBuilder();
        $this->dispatcher = new ContainerAwareEventDispatcher($this->container);

        parent::__construct('Toblerone', $version);
    }

    /**
     * @inheritdoc
     */
    public function doRun(InputInterface $input, OutputInterface $output)
    {
        $this->loadServices();
        $this->addServiceCommands();

        $event = new GenericEvent('test');
        $this->dispatcher->dispatch('example', $event);

        return parent::doRun($input, $output);
    }

    private function addServiceCommands()
    {
        $commands = $this->container->findTaggedServiceIds('console.command');

        foreach ($commands as $id => $v) {
            /** @var \Symfony\Component\Console\Command\Command $command */
            $command = $this->container->get($id);
            $this->add($command);
        }
    }

    private function loadServices()
    {
        $this->containerLoader = new XmlFileLoader($this->container, new FileLocator(__DIR__ . '/../Resources/config/'));
        $this->containerLoader->load('command-services.xml');
        $this->containerLoader->load('services.xml');
    }
}
