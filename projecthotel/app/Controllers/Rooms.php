<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Rooms extends BaseController
{
    public function rooms()
    {
        return view(name: 'layouts/header').
        view(name: 'layouts/navbar').
        view(name: 'rooms/roomsPage').
        view(name: 'layouts/footer');
    }
}
