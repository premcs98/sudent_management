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
    public function loginnew()
    {
        return view('stud/loginnew');
    }
    public function check()
    {
        helper(['form']);
        $data =[];
       if($this->request->getMethod()=='post')
       {
        $rules = 
        [
            'user_name'=>'required',
            'new_password'=>'required',
        ];
        if($this->validate($rules))
        {
            $session = session();
            $studentModel = new \App\Models\StudentModel();
            $user_name = $this->request->getPost('user_name');
            $new_password = $this->request->getPost('new_password');
            $new_password_h = password_hash($new_password,PASSWORD_BCRYPT);
            $data = $studentModel->where('user_name',$user_name)->first();
            if($data)
            {
                $pass = $data['new_password'];
                $verify_pass = password_verify($new_password_h,$pass);
                if($verify_pass)
                {
                    echo view('stud/dashboard');
                }
                else
                {
                    $session->setFlashdata('msg','wrong password ');
                    echo view('stud/login',$data);
                }
            }
            else
            {
                $session->setFlashdata('msg','Wrong User Name ');
                echo view('stud/login',$data);
            }
        }
       }
       else
       {
        $data['validation']=$this->validator;
        echo view('stud/login',$data);
       }
    }
}
?>