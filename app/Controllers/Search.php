<?php

namespace App\Controllers;

class Search extends BaseController
{
	public function index()
	{
		return view('search');
	}
	public function index2()
	{
		return view('viewsearch');
	}
}
