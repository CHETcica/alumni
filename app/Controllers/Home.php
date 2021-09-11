<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		//return view('welcome_message');
			echo view('templates/header');
            echo view('welcome_message');
            echo view('templates/footer');
	}
	public function table()
	{
		return view('user_view2');
	}
}
