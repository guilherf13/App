<?php

namespace App\Controllers;

use App\Controllers\Abstracts\BaseController;

class Home extends BaseController{

    public function home()
    {
        $this->views("HomePage", "teste");
    }
}