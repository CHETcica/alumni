<?php 


namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\UserModel;
use CodeIgniter\HTTP\Request;
use PhpParser\Node\Stmt\TryCatch;

class Edit extends BaseController{
    public function index(){
        helper(['form']);
        echo view('templates/header');
        echo view('edit');
        echo view('templates/footer');
         
    }

    public function update(){
        Try{
            $session = session();
            $model = new UserModel();
            $StudentID = $session->get("StudentID");
            $data = [
                'Firstname' => $this->request->getVar('Firstname'),
                'Lastname' => $this->request->getVar('Lastname'),
                'Province' => $this->request->getVar('Province'),
                'Section' => $this->request->getVar('Section'),
                'Major' => $this->request->getVar('Major'),
                'EducationYear' => $this->request->getVar('EducationYear')
            ];
            $model->update($StudentID, $data);
            $session->set($data);
            return redirect()->to('/profile');
        }
        catch (\Exception $e) {
            die($e->getMessage());
        }
            
            
    }
}
?>