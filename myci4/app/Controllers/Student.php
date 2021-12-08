<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use APP\Models\NewStudentModel;
use App\Libraries\Hash;
class Student extends Controller
{
    public function index()
    {
        echo view('stud/myview');
        return view ('stud/loginnew');
    }
    public function signup()
    {
        echo view('stud/myview');
        return view('stud/stu_signup');
    }
    public function signin()
    {
        helper(['form']);
        $data=[];
        {
            $rules=[
                    'fname'=>'required',
                    'mname'=>'required',
                    'lname'=>'required',
                    'f_fname'=>'required',
                    'f_mname'=>'required',
                    'f_lname'=>'required',
                    'm_fname'=>'required',
                    'm_mname'=>'required',
                    'm_lname'=>'required',
                    'dob'=>'required',
                    'religion'=>'required',
                    'caste'=>'required',
                    'f_occupation'=>'required',
                    'm_occupation'=>'required',
                    'nationality'=>'required',
                    'address'=>'required',
                    'r_address'=>'required',
                    's_email'=>'required',
                    'pincode'=>'required',
                    'academic_from'=>'required',
                    'academic_to'=>'required',
                    'department'=>'required',
                    'user_name'=>'required',
                    's_email'=>'required',
                    'password'=>'required',
                    'confirm_password'=>'required'
                    
            ];
            if($this->validate($rules))
            {
                $fname =$this->request->getPost('fname');
                $mname =$this->request->getPost('mname');
                $lname =$this->request->getPost('lname');
                $f_fname =$this->request->getPost('f_fname');
                $f_mname =$this->request->getPost('f_mname');
                $f_lname =$this->request->getPost('f_lname');
                $m_fname =$this->request->getPost('m_fname');
                $m_mname =$this->request->getPost('m_mname');
                $m_lname =$this->request->getPost('m_lname');
                $dob =$this->request->getPost('dob');
                $religion =$this->request->getPost('religion');
                $caste =$this->request->getPost('caste');
                $f_occupation =$this->request->getPost('f_occupation');
                $m_occupation =$this->request->getPost('m_occupation');
                $nationality =$this->request->getPost('nationality');
                $address =$this->request->getPost('address');
                $r_address =$this->request->getPost('r_address');
                $pincode =$this->request->getPost('pincode');
                $academic_from =$this->request->getPost('academic_from');
                $academic_to =$this->request->getPost('academic_to');
                $department =$this->request->getPost('department');
                $user_name =$this->request->getPost('user_name');
                $s_email =$this->request->getPost('s_email');
                $password =$this->request->getPost('password');
                $confirm_password =$this->request->getPost('confirm_password');
                $values=
                    [
                        'fname'=>$fname,
                        'mname'=>$mname,
                        'lname'=>$lname,
                        'f_fname'=>$f_fname,
                        'f_mname'=>$f_mname,
                        'f_lname'=>$f_lname,
                        'm_fname'=>$m_fname,
                        'm_mname'=>$m_mname,
                        'm_lname'=>$m_lname,
                        'dob'=>$dob,
                        'religion'=>$religion,
                        'caste'=>$caste,
                        'f_occupation'=>$f_occupation,
                        'm_occupation'=>$m_occupation,
                        'nationality'=>$nationality,
                        'address'=>$address,
                        'r_address'=>$r_address,
                        'pincode'=>$pincode,
                        'academic_from'=>$academic_from,
                        'academic_to'=>$academic_to,
                        'department'=>$department,
                        'user_name'=>$user_name,
                        's_email'=>$s_email,
                        'password'=>password_hash($password, PASSWORD_BCRYPT),
                        'confirm_password'=>$confirm_password,
                    ];
                $studentModel= new \App\Models\NewStudentModel();
                $query= $studentModel->insert($values);
                echo view('stud/login');
            }
            else
            {
                $data['validation']=$this->validator;
                echo view('stud/myview');
                echo view('stud/stu_signup',$data);
            }
        }
    }
    public function login()
    {
        echo view('stud/myview');
        return view('stud/stu_login');
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
            'password'=>'required',
        ];
        if($this->validate($rules))
        {
            $session = session();
            $studentModel = new \App\Models\NewStudentModel();
            $user_name = $this->request->getPost('user_name');
            $password = $this->request->getPost('password');
            $password_h = $password;
            var_dump($password_h);
            $data = $studentModel->where('user_name',$user_name)->first();
            if($data)
            {
                $pass = $data['password'];
                var_dump($pass);
                $verify_pass = password_verify($password_h,$pass);
                var_dump($verify_pass);
                if($verify_pass)
                {
                    echo view('stud/myview');
                    echo view('stud/dashboard');
                }
                else
                {
                    $session->setFlashdata('msg','wrong password ');
                    echo view('stud/myview');
                    echo view('stud/stu_login',$data);
                }
            }
            else
            {
                $session->setFlashdata('msg','Wrong User Name ');
                echo view('stud/stu_login',$data);
            }
        }
        else
       {
        $data['validation']=$this->validator;
        echo view('stud/myview');
        echo view('stud/stu_login',$data);
       }
       }
    }
}

?>