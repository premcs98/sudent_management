<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Welcome extends Controller
{
    public function index()
    {
        echo view('stud/myview');
    }
}