<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{
    public function index()
    {
    
        return view(name: 'layouts/header').
        view(name: 'layouts/navbar').
        view(name: 'admin/adminPage').
        view(name: 'layouts/footer');
        // echo "Login";
    }
}
