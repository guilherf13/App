<?php

namespace App\Router;

class Route
{
    const Method_GET = 'GET';
    const Method_POST = 'POST';

    private $uri;
    private $method;
    private $class;
    private $functionName;

    public function __construct($uri, $method, $class, $functionName)
    {
        $this->uri = $uri;
        $this->method = $method;
        $this->class = $class;
        $this->functionName = $functionName;
    }

    public function getUri()
    {
        return $this->uri;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getClass()
    {
        return $this->class;
    }

    public function getFunctionName()
    {
        return $this->functionName;
    }
}
