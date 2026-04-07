<?php

namespace App\Controllers;

use App\Core\View;

class HomeController {

    public function index()
    {

        $data = [
            "title" => "Home",
            "css" => "index.css",
            "bodyClass" => "home-page"
        ];

        View::render('home', $data);
    }

    public function loginFuncionario()
    {

        $data = [
            'title' => 'Login Funcionário',
            'css' => 'login.css',
            'bodyClass' => 'login-page'
        ];

        View::render('loginFuncionario', $data);
    }

}