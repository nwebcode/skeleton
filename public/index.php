<?php
$protocol = (isset($_SERVER['SERVER_PROTOCOL'])) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0';
setcookie("TestCookie", 1);
header($protocol . ' 503 OK', true, 404);
header($protocol . ' 404 OK', false);




/*
chdir(dirname(__DIR__));

require 'vendor/autoload.php';

$app = new Nweb/Application(
    require 'config/app.php'
);
$app->run();
*/