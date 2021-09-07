<?php namespace App\Controllers;

use CodeIgniter\Controller;


    class Profile extends Controller{
        public function index(){ 
            echo view('profile');
        } 
    }
?>