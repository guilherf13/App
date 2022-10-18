<?php

namespace App\Controllers;

use App\Controllers\Abstracts\BaseControllers;

class Contact extends BaseControllers{

    public function contact()
    {
        $this->views('contact',[]);
    }
}