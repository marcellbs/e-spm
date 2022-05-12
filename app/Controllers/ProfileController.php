<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
  
class ProfileController extends Controller
{
    public function index()
    {
        return view('postpage');
    }

    public function login(){
        return view('frontend/login');
    }
}