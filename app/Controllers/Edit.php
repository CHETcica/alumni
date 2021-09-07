<?php 


namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\UserModel;
use CodeIgniter\HTTP\Request;



class Edit extends BaseController{
    public function index(){
        //include helper form
        helper(['form']);
        // $data = [];
        // echo view('edit', $data);
        return view('edit');
    }

    public function update(){
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
        // if($this->validate($rules)){

        // if(helper('form')){
            $session = session();
            $model = new UserModel();
            $StudentID = $this->request->getVar('StudentID');
            $data = [
                'Firstname' => $this->request->getVar('Firstname'),
                'Lastname' => $this->request->getVar('Lastname'),
                'Sex' => $this->request->getVar('Sex'),
                'Province' => $this->request->getVar('Province'),
                // 'StudentID' => $this->request->getVar('StudentID'),
                // 'Password' => password_hash($this->request->getVar('Password'), PASSWORD_BCRYPT),
                'Section' => $this->request->getVar('Section'),
                'Major' => $this->request->getVar('Major'),
                'EducationYear' => $this->request->getVar('EducationYear')
            ];
            $model->update($StudentID, $data);
            
            return redirect()->to('/profile');
            //echo var_dump($data);
        // }else{
        //     $data['validation']= $this->validator;
        //     echo view('edit', $data);
        //     echo var_dump("wang");
        // }
    }
}



?>