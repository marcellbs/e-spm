<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\Post;
use CodeIgniter\RESTful\ResourceController;

class HomeController extends BaseController
{
    private $post;
    private $user;

    public function __construct()
    {
        helper(['form', 'url', 'session']);
        $this->session = \Config\Services::session();
        $this->post = new Post;     
        $this->user = new UserModel;     
    }
    
    public function index()
    {   
        $posts = $this->post->orderBy('id', 'desc')->findAll();
        $users = $this->user->findAll();
        $data = [
            'title' => 'Dashboard',
            'posts' => $posts,
            'user' => $users,
        ];
        
        return view('home/home',$data);
    }
    
}
