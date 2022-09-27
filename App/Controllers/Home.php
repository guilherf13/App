<?php

namespace App\Controllers;

use App\Controllers\Abstracts\BaseControllers;

class Home extends BaseControllers{

    public function home()
    {
        $this->views("HomeView", []);
    }
}