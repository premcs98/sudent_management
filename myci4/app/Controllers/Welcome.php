<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Welcome extends Controller
{
    public function index()
    {
        return view ('stud/myview');
    }
    public function signup()
    {
        return view ('stud/signup');
    }
    public function login()
    {
        return view ('stud/login');
    }
}
