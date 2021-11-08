<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class User extends Controller
{
   public function index()
   {
        $db = \Config\Database::connect();
        $query   = $db->query('SELECT * FROM student_info');
        $results = $query->getResult();

        foreach ($results as $row) 
        {
            echo $row->fname;
            echo $row->mname;
        }

        echo 'Total Results: ' . count($results);
   } 
}