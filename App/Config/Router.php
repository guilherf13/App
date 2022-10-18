<?php

namespace App\Config;

class Router
{
    public static function configRouters(\App\Router\Routing $routing)
    {

        $routing->setBaseUrl('http://localhost/Projeto/App/index.php');

        $routing->getErro404(function () {
            echo 'Erro 404';
        });

        $routing->get('/', \App\Controllers\Home::class, "home");
        $routing->get('/about', \App\Controllers\About::class, "about");
        $routing->get('/contact', \App\Controllers\Contact::class, "contact");
        $routing->post('/send_contact',\App\Controllers\send_contact::class, "send_contact");
    }
}
