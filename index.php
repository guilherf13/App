<?php
require_once("./vendor/autoload.php");

error_reporting(E_ALL);

use App\Router\Routing;

$router = new Routing;

\App\Config\Router::configRouters($router);

$router->run();
