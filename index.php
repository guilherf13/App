<?php
require_once("./vendor/autoload.php");

error_reporting(E_ALL);

use App\Router\Router;

$router = new Router;

\App\Config\Router::configRouters($router);

$router->run();
