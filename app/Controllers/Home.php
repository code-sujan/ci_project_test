<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $var = 1;
        return view('welcome_message');

    }
}
