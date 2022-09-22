<?php
namespace App\Controllers\Abstracts;

abstract class BaseController{

    public function views($viewName, $data = [])
    {
        $viewPaths = realpath(__DIR__."/../../Views".'/');
        var_dump($viewName);
    }
}