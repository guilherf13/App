<?php

namespace App\Controllers;
use App\Controllers\Abstracts\BaseControllers;

class About extends BaseControllers{

    public function about ()
    {
        $data['page'] = 'about';
        $this->views("index", $data);
    }
}