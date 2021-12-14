<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use APP\Models\StaffModel;
use App\Libraries\Hash;
class Staff extends Controller
{
    public function index()
    {
        echo view('stud/myview');
        return view ('stud/loginnew');
    }
    public function signup()
    {
        echo view('stud/myview');
        return view('stud/staff_signup');
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
                    'nationality'=>'required',
                    'address'=>'required',
                    'r_address'=>'required',
                    'pincode'=>'required',
                    'emp_email'=>'required',
                    'emp_degree'=>'required',
                    'emp_area_of_specilization'=>'required',
                    'emp_sslc_percent'=>'required',
                    'emp_hslc_percent'=>'required',
                    'emp_degree_percent'=>'required',
                    'emp_department'=>'required',
                    'emp_user_name'=>'required',
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
                $nationality =$this->request->getPost('nationality');
                $address =$this->request->getPost('address');
                $r_address =$this->request->getPost('r_address');
                $pincode =$this->request->getPost('pincode');
                $emp_email =$this->request->getPost('emp_email');
                $emp_degree =$this->request->getPost('emp_degree');
                $emp_area_of_specilization =$this->request->getPost('emp_area_of_specilization');
                $emp_sslc_percent =$this->request->getPost('emp_sslc_percent');
                $emp_hslc_percent =$this->request->getPost('emp_hslc_percent');
                $emp_degree_percent =$this->request->getPost('emp_degree_percent');
                $emp_department =$this->request->getPost('emp_department');
                $emp_user_name =$this->request->getPost('emp_user_name');
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
                        'nationality'=>$nationality,
                        'address'=>$address,
                        'r_address'=>$r_address,
                        'pincode'=>$pincode,
                        'emp_email'=>$emp_email,
                        'emp_degree'=>$emp_degree,
                        'emp_area_of_specilization'=>$emp_area_of_specilization,
                        'emp_sslc_percent'=>$emp_sslc_percent,
                        'emp_hslc_percent'=>$emp_hslc_percent,
                        'emp_degree_percent'=>$emp_degree_percent,
                        'emp_department'=>$emp_department,
                        'emp_user_name'=>$emp_user_name,
                        'password'=>password_hash($password, PASSWORD_BCRYPT),
                        'confirm_password'=>$confirm_password,
                    ];
                $staffModel= new \App\Models\StaffModel();
                $query= $staffntModel->insert($values);
                echo view('stud/staff_login');
            }
            else
            {
                $data['validation']=$this->validator;
                echo view('stud/myview');
                echo view('stud/staff_signup',$data);
            }
        }
    }
    public function login()
    {
        echo view('stud/myview');
        return view('stud/staff_login');
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
            $staffModel = new \App\Models\StaffModel();
            $user_name = $this->request->getPost('emp_user_name');
            $password = $this->request->getPost('password');
            $password_h = $password;
            var_dump($password_h);
            $data = $studentModel->where('emp_user_name',$user_name)->first();
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
                    echo view('stud/staff_login',$data);
                }
            }
            else
            {
                $session->setFlashdata('msg','Wrong User Name ');
                echo view('stud/myview');
                echo view('stud/staff_login');
            }
        }
        else
       {
        $data['validation']=$this->validator;
        echo view('stud/myview');
        echo view('stud/staff_login',$data);
       }
       }
    }
}

?>