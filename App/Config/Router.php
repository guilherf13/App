<?php

namespace App\Config;

use App\Controllers\About;

class Router
{
    public static function configRouters(\App\Router\Router $router)
    {

        $router->setBaseUrl('http://localhost/Projeto/index.php');

        $router->getErro404(function () {
            echo 'Erro 404';
        });

        $router->get('/', \App\Controllers\Home::class, "home");
        $router->get('/about', \App\Controllers\About::class, "about");
        $router->get('/contact', \App\Controllers\Contact::class, "contact");
    }
}
