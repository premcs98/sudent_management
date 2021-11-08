<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use APP\Models\StudentModel;
use CodeIgniter\HTTP\RequestInterface;
class Welcome extends Controller
{
    protected $mRequest;
    public function __construct()
    {
        $this->mRequest = service("request");
    }
    public function index()
    {
        return view ('stud/myview');
    }
    public function signup()
    {
        return view ('stud/signup');
    }
    public function save()
    {

        $user_name =$this->request->getPost('user_name');
        $email =$this->request->getPost('email');
        $new_password =$this->request->getPost('new_password');
        $confirm_password =$this->request->getPost('confirm_password');
        $values=[
                    'user_name'=>$user_name,
                    'email'=>$email,
                    'new__password'=>$new_password,
                    'confirm_password'=>$confirm_password,
        ];
        $studentModel= new \App\Models\StudentModel();
        $query= $studentModel->insert($values);
    }
    public function login()
    {
        return view ('stud/login');
    }
}
?>