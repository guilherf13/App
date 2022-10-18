<?php
namespace App\Controllers;

use \App\Controllers\Abstracts\BaseControllers;

class send_contact extends BaseControllers{
    public function send_contact()
    {
        $this->views('send_contact',[]);
    }
}