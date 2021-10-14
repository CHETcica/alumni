<?php namespace App\Models;

use CodeIgniter\Model;

    class AddressModel extends Model{
        protected $table = 'address';
        protected $primaryKey = 'UserID';
        protected $allowedFields = ['Address','Province','District','Subdistrict','Zipcode'];
    }
?>