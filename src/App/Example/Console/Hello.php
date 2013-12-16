<?php

namespace App\Example\Console;

class Hello extends \Nweb\Framework\Application\Console {

    public function init()
    {
        $this->setName('example:hello');
    }

    public function handle()
    {
        $this->write('Hello World');
    }
}