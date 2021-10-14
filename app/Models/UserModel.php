<?php namespace App\Models;

use CodeIgniter\Model;

    class UserModel extends Model{
        protected $table = 'user';
        protected $primaryKey = 'StudentID';
        protected $allowedFields = ['Firstname','Lastname','Sex','Province','StudentID','Password','Section','Major','EducationYear'];
    }
?>
