<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use APP\Models\StudentModel;
use App\Libraries\Hash;
class Welcome extends Controller
{
    public function __construct()
    {
        helper(['url','form']);
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
        helper(['form']);
        $data =[];
       if($this->request->getMethod()=='post')
       {
        
        $rules = 
        [
            'user_name'=>'required',
            'email'=>'required|valid_email|is_unique[test.email]',
            'new_password'=>'required',
            'confirm_password'=>'required|matches[new_password]'
        ];
            if($this->validate($rules))
            {
                $user_name =$this->request->getPost('user_name');
                $email =$this->request->getPost('email');
                $new_password =$this->request->getPost('new_password');
                $confirm_password =$this->request->getPost('confirm_password');
                $values=
                    [
                        'user_name'=>$user_name,
                        'email'=>$email,
                        'new_password'=>Hash::make($new_password),
                        'confirm_password'=>$confirm_password,
                    ];
                $studentModel= new \App\Models\StudentModel();
                $query= $studentModel->insert($values);
            }
            else
            {
                $data['validation']=$this->validator;
                echo view('stud/signup',$data);
            }
       }
    }
    public function login()
    {
        return view ('stud/login');
    }
    public function check()
    {   
        $session = session();
        $validation = $this->validate(
        [
            'user_name'=>
            [
                'rules'=>'required|valid_user_name|is_not_unique[test.user_name]',
                'errors'=>
                        [
                            'required'=>'user_name is required',
                            'valid_user_name'=>'Enter the valid user_name',
                            'is_not_unique'=>'this user_name is not registered'
                        ]
            ],
            'password'=>
                [
                            'rules'=>'required',
                            'errors'=>
                            [
                                'required'=>'Password is required'
                            ]
                ]
        ]);
        if(!$validation){
                    return view('stud/login',['validation'->this->validator]);
        }
        else
        {
            echo'validated sucessfully';
        }
        $user_name =$this->request->getPost('user_name');
        $new_password = $this->request->getPost('new_password');
        $studentModel = new \App\Models\StudentModel();
        $user_info = $studentModel->where('user_name',$user_name,)->first();
        $check_password = Hash::check($new_password,$user_info['new_password']);

        if(!$check_password)
        {
            session()->setFlashdata('fail','Incorrect password');
            return redirect()->to('/welcome')->withInput();
        }
    }
}
?>