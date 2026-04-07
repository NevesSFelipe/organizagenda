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

        View::render('home/index', $data);
    }

}