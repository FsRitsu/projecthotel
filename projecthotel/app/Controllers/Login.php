<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\userModel;

class Login extends BaseController
{
    public function index()
    {
        return view(name: 'layouts/header').
        view(name: 'layouts/navbar').
        view(name: 'login/loginPage').
        view(name: 'layouts/footer');
        // echo "Login";
    }

    public function loginAction()
    {
        $session = session();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $userCheck = new userModel();
        $check = $userCheck->where('email', $email)->first();

        if($check){
            $checkPassword = password_verify($password, $check['password']);
            if($checkPassword){
                $sessionData = [
                    'id' => $check['id'],
                    'name' => $check['name'],
                    'email' => $check['email'],
                    'phonenumber' => $check['phonenumber'],
                    'level' => $check['level'],
                    'logged_in' => TRUE,
                ];
                $session->set($sessionData);
                switch($check['level']){
                    case 'admin':
                        return redirect()->to('/admin');
                        break;
                        case 'user':
                            return redirect()->to('/');
                            break;
                    default:
                    session()->setFlashdata('pesan', 'Login Gagal!, Akun Belum Terdaftar');
                    return redirect()->to('/login');

                }
            }else{
                session()->setFlashdata('pesan', 'Login Gagal!, password anda salah');
                return redirect()->to('/login');
            }

        }else{
            session()->setFlashdata('pesan', 'Login Gagal!, email anda belum terdaftar');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session -> destroy();
        
        return redirect()->to('/login');
    }

}
