<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Services extends BaseController
{
    public function services()
    {
        return view(name: 'layouts/header').
        view(name: 'layouts/navbar').
        view(name: 'services/servicesPage').
        view(name: 'layouts/footer');
        
        // echo "Services";
    }
}
