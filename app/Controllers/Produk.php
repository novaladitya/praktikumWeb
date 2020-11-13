<?php namespace App\Controllers;

use CodeIgniter;
use App\Models\ProdukModel;

class Produk extends BaseController{
	public function index(){
		$model = new ProdukModel();
		$data['produk'] = $model->getProduk();

		echo view('produk\index', $data);
	}
}