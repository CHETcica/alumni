<?php

namespace App\Controllers;

use App\Models\UserModel;

class Search extends BaseController
{
	public function index()
	{
		return view('search');
	}
	
	public function showUser()
	{
		$userModel = new UserModel();
        $data['datauser'] = $userModel->orderBy('StudentID', 'DESC')->findAll();
			echo view('templates/header');
            echo view('user_view', $data);
            echo view('templates/footer');
	}

}
