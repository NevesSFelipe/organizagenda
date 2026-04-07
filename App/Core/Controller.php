<?php

namespace App\Core;

use App\Core\View;

class Controller {

    public function index(): void
    {
        View::renderError(404);
    }

}