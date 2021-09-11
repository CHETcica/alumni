<?php namespace App\Controllers;

use CodeIgniter\Controller;


    class Profile extends Controller{
        public function index(){ 
            echo view('templates/header');
            echo view('profile');
            echo view('templates/footer');
        } 
    }
    
?>