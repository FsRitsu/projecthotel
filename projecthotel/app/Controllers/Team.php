<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Team extends BaseController
{
    public function index()
    {
        return view(name: 'layouts/header').
        view(name: 'layouts/navbar').
        view(name: 'team/teamPage').
        view(name: 'layouts/footer');
        
        // echo "Services";
    }
}
