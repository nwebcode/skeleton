<?php

chdir(dirname(__DIR__));

require 'vendor/autoload.php';

$app = new \Nweb\Framework\Application(
    require 'config/app.php'
);

/**
 * 
 */
$app->run();