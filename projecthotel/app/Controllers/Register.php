<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Register extends BaseController
{
    public function register()
    {
        return view(name: 'layouts/header').
        view(name: 'layouts/navbar').
        view(name: 'register/registerPage').
        view(name: 'layouts/footer');
        //
    }
}
