<?php

namespace App\Example;

class Module extends \Nweb\Framework\Application\Module {

    public function init()
    {
        // $eventManager = $this->getEventManager();
        // $eventManager->on(\Nweb\Framework\Application\EventManager::)

        $router = $this->getService('Router');
        //$router->setResource('Router', new Router());
        
        
        $router->addRoute('/', function (Application $app) {
            return 
                (new App\Example\Controller\Index())
                ->setAppliction($app)
                ->helloAction();
        });
        
        $router->addRoute('/', function (Application $app) {
            return
            (new Nweb\Framework\Application\Response())
            ->setAppliction($app)
            ->helloAction();
        });
    }
}