<?php namespace App\Controllers;

class Home extends BaseController{
	public function index(){
		return view('welcome_message');
	}

	//--------------------------------------------------------------------
	public function show(){
		$data['nama'] = 'Noval Aditya Marlon';
		$data['npm'] = '1817051019';

		echo view('mahasiswa/header');
		echo view('mahasiswa/index', $data);
		echo view('mahasiswa/footer');
	}
}
