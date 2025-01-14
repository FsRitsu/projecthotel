<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function home()
    {
        return view(name: 'layouts/header').
        view(name: 'layouts/navbar').
        view(name: 'home/homePage').
        view(name: 'layouts/footer');

        //echo "tas";
    }

}
