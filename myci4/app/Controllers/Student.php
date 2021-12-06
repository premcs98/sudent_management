<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use APP\Models\StudentModel;
use App\Libraries\Hash;
class Student extends Controller
{
    public function index()
    {
        return view ('stud/loginnew');
    }
    public function signup()
    {
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
                    'm_lanme'=>'required',
                    'dob'=>'required',
                    'relegion'=>'required',
                    'caste'=>'required',
                    'f_occupation'=>'required'
                    
            ];
        }
    }
}

?>