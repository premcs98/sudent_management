<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class StudentModel extends Model
    {
        protected $table ='test';
        protected $primarykey ='id';
        protected $allowfields = ['user_name','email','new_password','confirm_password'];
    }
?>