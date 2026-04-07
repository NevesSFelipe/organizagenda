<?php

namespace App\Controllers;

use App\Core\View;

class FuncionariosController {

    public function login()
    {

        $data = [
            'title' => 'Login Funcionário',
            'css' => 'login.css',
            'bodyClass' => 'login-page'
        ];

        View::render('funcionarios/login', $data);
    }

}