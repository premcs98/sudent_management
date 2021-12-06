<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class StudentModel extends Model
    {
        protected $table ='test';
        protected $primaryKey ='id';
        protected $allowedFields =['user_name','email','new_password','confirm_password'];
        protected $useTimestamps = true;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';
        protected $deletedField  = 'deleted_at';
    }
?>