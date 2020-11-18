<?php namespace App\Controllers;

class Tucil extends BaseController{
        public function login(){
                return view('pagestucil/login');
        }

        public function register(){
                return view('pagestucil/register');
        }

        public function admin(){
                return view('pagestucil/admin');
        }
        
	public function home(){
                return view('pagestucil/home');
        }

        public function slipon(){
                return view('pagestucil/deskslipon');
        }

        public function jepit(){
                return view('pagestucil/deskjepit');
        }

        public function gunung(){
                return view('pagestucil/deskgunung');
        }

        public function about(){
                return view('pagestucil/about');
        }
}