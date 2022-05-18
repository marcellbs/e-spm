<?php

namespace App\Controllers;

use App\Models\Post;
use CodeIgniter\RESTful\ResourceController;

class HomeController extends BaseController
{
    private $post;

    public function __construct()
    {
        helper(['form', 'url', 'session']);
        $this->session = \Config\Services::session();
        $this->post = new Post;     
    }
    
    public function index()
    {   
        $posts = $this->post->orderBy('id', 'desc')->findAll();
        return view('home/home', compact('posts'));
    }
    
}
