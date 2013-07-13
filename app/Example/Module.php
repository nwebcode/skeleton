<?php

namespace App\Example;

class Module extends \Nweb\Framework\Application\Module {

    public function init()
    {
        // $eventManager = $this->getEventManager();
        // $eventManager->on(\Nweb\Framework\Application\EventManager::)

        $router = $this->getResource('\Nweb\Framework\Application\Router');
        $router->addRoute('/', array(
            'controller' => '\\Appp\\Example\\Controller\\Index',
            'action'     => 'hello'
        ));
    }
}