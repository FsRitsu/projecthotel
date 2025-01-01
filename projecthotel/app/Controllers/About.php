<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class About extends BaseController
{
    public function about()
    {
        // return view('about/aboutPage');
        return view(name: 'layouts/header').
        view(name: 'layouts/navbar').
        view(name: 'about/aboutPage').
        view(name: 'layouts/footer');
    }
}
