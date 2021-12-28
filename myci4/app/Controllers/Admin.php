<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use APP\Models\StaffModel;
use App\Libraries\Hash;
class Admin extends Controller
{
    public function index()
    {
        echo view('stud/myview');
        return view ('stud/loginnew');
    }
    public function login()
    {
        
    }
}
?>