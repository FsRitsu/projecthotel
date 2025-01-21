<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class adminFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(!session()->get('logged_in')){
            session()->setFlashdata('pesan', 'Anda belum Login');
            return redirect()->to('login');
        }

        if(session()->get('level') != 'admin'){
            session()->setFlashdata('pesan', 'Anda tidak memiliki akses');
            return redirect()->back();
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}