<?php
namespace App\Controllers\Abstracts;

abstract class BaseControllers{

    public function views($viewName, $data = [])
    {
        $viewPaths = realpath(__DIR__."/../../Views")."/";
        $fileView = $viewPaths.$viewName.".php";
        if(!file_exists($fileView)){
            throw new \Exception("Erro 404 ".$fileView);
        }
        extract($data);
        include $fileView;
    }
}