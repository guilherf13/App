<?php

namespace App\Controllers;
use App\Controllers\Abstracts\BaseControllers;

class About extends BaseControllers{

    public function about ()
    {
        $this->views("About", []);
    }
}