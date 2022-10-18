<?php

namespace App\Router;

class Routing
{

    private $baseUrl;
    private $routers = []; //Array de Objetos Rotas
    private $uri;
    private $url;
    private $erro404;

    public function getErro404($fun)
    {
        $this->erro404 = $fun;
    }

    public function get($uri, $class, $functionName)
    {
        $this->routers[] = new Route($uri, Route::Method_GET, $class, $functionName);
    }

    public function post($uri, $class, $functionName)
    {
        $this->routers[] = new Route($uri, Route::Method_POST, $class, $functionName);
    }

    public function setBaseUrl($url)
    {
        $this->baseUrl = $url;
    }

    public function run()
    {
        $this->url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        $this->uri = '/' . ltrim(str_ireplace($this->baseUrl, '', $this->url), "/");

        foreach ($this->routers as $route) {
            if ($route->getUri() == $this->uri) {
                $namespace = '\\' . $route->getClass();
                $instance = new $namespace;
                $instance->{$route->getFunctionName()}();
                
                exit;
            }
        }

        if ($this->erro404) {
            call_user_func($this->erro404);
        }
    }
}
