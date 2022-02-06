<?php

include('/app/vendor/autoload.php');


$router = new App\Router\Router();

$router->addRoute('/', new App\Modules\Controller\Main());
$router->addRoute('/login', new App\Modules\Controller\Login());
$router->addRoute('/registration', new App\Modules\Controller\Registration());
$router->addRoute('/logout', new App\Modules\Controller\Logout());
$router->addRoute('/weather', new App\Modules\Controller\Weather());
$router->addRoute('/movies', new App\Modules\Controller\Movies());





$router->getRoute($_SERVER['REQUEST_URI'])->getPage();
