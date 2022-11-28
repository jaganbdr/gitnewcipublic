<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo "this is updated";
        return view('welcome_message');
        
    }
}
