<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function login()
    {
        return view(name: 'layouts/header').
        view(name: 'layouts/navbar').
        view(name: 'login/loginPage').
        view(name: 'layouts/footer');
        // echo "Login";
    }
}
