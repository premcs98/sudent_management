<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class StaffModel extends Model
    {
        protected $table ='employee_info';
        protected $primaryKey ='emp_id';
        protected $allowedFields =['fname','mname','lname','f_fname','f_mname','f_lname','m_fname','m_mname',
                                    'm_lname','dob','relegion','caste','nationaliy','address','r_address',
                                    'pincode','emp_email','emp_degree','emp_area_of_specalization','emp_sslc_percent',
                                    'emp_hslc_percent','emp_degree_percent','emp_department','emp_user_name','password','confirm_password'];
        protected $useTimestamps = true;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';
        protected $deletedField  = 'deleted_at';
    }
?>