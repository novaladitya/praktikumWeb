<?php namespace App\Controllers;

class Helloworld extends BaseController{
	public function index($name, $npm){
		// echo $this->name;
		echo $name ."<br>";
		echo $npm ."<br>";
		// echo "Hello Noval";
	}

	public function show(){
		echo "Noval Aditya Marlon<br>";
		echo "1817051019";
	}
}