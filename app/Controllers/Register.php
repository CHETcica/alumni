<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use CodeIgniter\HTTP\Request;

class Register extends Controller{
    public function index(){
        //include helper form
        helper(['form']);
        $data = [];
        echo view('templates/header');
        echo view('register', $data);
        echo view('templates/footer');
        
    }
    public function alert(){
        echo view('templates/header');
        echo view('alert');
        echo view('templates/footer');
    }

    public function save(){
        helper('form');

        $rules=[
            'Firstname' => 'required|min_length[3]|max_length[20]',
            'Lastname' => 'required|min_length[3]|max_length[20]',
            'Sex' => 'required',
            'Province' => 'required',
            'StudentID' => 'required|min_length[9]',
            'Password' => 'required|max_length[20]',
            'Section' => 'required',
            'Major' => 'required',
            'EducationYear' => 'required'
        ];
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'Firstname' => $this->request->getVar('Firstname'),
                'Lastname' => $this->request->getVar('Lastname'),
                'Sex' => $this->request->getVar('Sex'),
                'Province' => $this->request->getVar('Province'),
                'StudentID' => $this->request->getVar('StudentID'),
                'Password' => password_hash($this->request->getVar('Password'), PASSWORD_BCRYPT),
                'Section' => $this->request->getVar('Section'),
                'Major' => $this->request->getVar('Major'),
                'EducationYear' => $this->request->getVar('EducationYear')
            ];
            $model->insert($data);
            return redirect()->to('/alert');

        }else{
            $data['validation']= $this->validator;
            echo view('register', $data);
        }
    }
}



?>