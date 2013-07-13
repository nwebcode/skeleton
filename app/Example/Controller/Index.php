<?php

namespace App\Example\Controller;

class Index extends \Nweb\Framework\Application\Controller {

    public function helloAction()
    {
        return new Nweb\Framework\View(array(
            'hello' => 'Hello World'
        ));
    }
}