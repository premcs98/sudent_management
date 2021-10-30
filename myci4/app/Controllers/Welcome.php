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
    public function save()
    {
        $db =\config\Database::connect();
        $query = $db->query("INSERT INTO test(user_name, email,new_password,confirm_password)
        VALUES ('user_name','email','new_password','confirm_password');");
        $result=$query->getResult();
        print_r($result);
    } 
}
?>