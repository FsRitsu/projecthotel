<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Booking extends BaseController
{
    public function booking()
    {
        return view(name: 'layouts/header').
        view(name: 'layouts/navbar').
        view(name: 'booking/bookingPage').
        view(name: 'layouts/footer');
    }
}
