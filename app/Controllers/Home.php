<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('haloo');
    }

    public function login(){
        return view('frontend/login');
    }
}
