<?php
namespace App\Controllers;

class user extends BaseController
{

    public function index(){
        $data =[
            'title' => 'Form Login',
            'tampil' => 'login',
        ];
        echo view('templates/wrapper', $data);
    }
    public function register(){
        $data =[
            'title' => 'Form Register',
            'tampil' => 'register',
        ];
        echo view('templates/wrapper', $data);
    }
}