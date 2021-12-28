<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class NewStudentModel extends Model
    {
        protected $table ='student_info';
        protected $primaryKey ='id';
        protected $allowedFields =['fname','mname','lname','f_fname','f_mname','f_lname','m_fname','m_mname',
                                    'm_lname','dob','religion','caste','f_occupation','m_occupation',
                                    'nationality','address','r_address','s_email','pincode','academic_from','academic_to',
                                    'department','user_name','password','confirm_password'];
        protected $useTimestamps = true;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';
        protected $deletedField  = 'deleted_at';
    }
?>