<?php
    
namespace App\App\Config;

class Config{

    public static function url($arquivo)
    {
        $pathUrl = __DIR__ . "../Views";
        $pathUrl = realpath($pathUrl);
        var_dump($pathUrl);

    }
}