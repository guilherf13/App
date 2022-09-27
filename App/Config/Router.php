<?php

namespace App\Config;

class Router
{
    public static function configRouters(\App\Router\Router $router)
    {

        $router->setBaseUrl('http://localhost/Projeto/App/index.php');

        $router->getErro404(function () {
            echo 'Erro 404';
        });

        $router->get('/', \App\Controllers\Home::class, "home");
        $router->get('/about', \App\Controllers\About::class, "about");
        $router->get('/contact', \App\Controllers\Contact::class, "contact");
        $router->post('/send_contact',\App\Controllers\send_contact::class, "send_contact");
    }
}
