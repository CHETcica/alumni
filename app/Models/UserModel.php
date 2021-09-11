<?php namespace App\Models;

use CodeIgniter\Model;

    class UserModel extends Model{
        protected $table = 'datauser';
        protected $primaryKey = 'StudentID';
        protected $allowedFields = ['Firstname','Lastname','Sex','Province','Password','Section','Major','EducationYear'];
    }
?>
