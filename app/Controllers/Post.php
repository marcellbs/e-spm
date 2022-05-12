<?php

namespace App\Controllers;

class Post extends BaseController
{
    public function index()
    {
        return view('postpage');
    }

    public function template()
    {
        return view('layout/template');
    }
}
