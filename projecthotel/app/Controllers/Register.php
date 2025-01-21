<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\userModel;

class Register extends BaseController
{
    public function __construct(){
        helper(['form']);
    }

    public function index()
    {
        $data = [];
        return view(name: 'layouts/header').
        view(name: 'layouts/navbar').
        view(name: 'register/registerPage').
        view(name: 'layouts/footer');
        //
    }
 
    // public function index()
    // {
    //     $data = [];
    //     return view('register/registerPage', $data);
    //     view(name: 'layouts/header').
    //     view(name: 'layouts/navbar').
    //     view(name: 'layouts/footer');
    // }
   
    public function addData()
    {
        $rules = [
            'name' => ['rules' => 'required|min_length[4]|max_length[40]'],
            'email' => ['rules' => 'required|min_length[4]|max_length[40]|valid_email|is_unique[users.email]'],
            'phonenumber' => ['rules' => 'required|min_length[4]|max_length[12]'],
            'password' => ['rules' => 'required|min_length[8]|max_length[255]'],
        ];
           
 
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'name'    => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'phonenumber'    => $this->request->getVar('phonenumber'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'level' => 'user'
            ];
            $model->save($data);
            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator;
            //return view('register/registerPage', $data);
            return view('layouts/header').
            view('layouts/navbar').
            view('register/registerPage', $data).
            view('layouts/footer');
        }
           
    }

    public function errorData()
    {
        $data = [];
        return view(name: 'layouts/header').
        view(name: 'layouts/navbar').
        view(name: 'register/registerPage');
        view(name: 'layouts/footer');
    }
}

// $user = new userModel();

    //     // Form validation input user
    //     $validationRules = [
    //         'name'      => [
    //             'label' => 'Nama',
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => 'Field ini harus diisi.'
    //             ],
    //         ],
    //         'email'     => [
    //             'label' => 'Email',
    //             'rules' => 'required|valid_email|is_unique[peminjam.email]',
    //             'errors' => [
    //                 'required' => 'Field ini harus diisi.',
    //                 'valid_email' => 'Format email tidak valid.',
    //                 'is_unique' => 'Email ini sudah terdaftar.',
    //             ],
    //         ],
    //         'phone'     => [
    //             'label' => 'Nomor Telepon',
    //             'rules' => 'required|numeric',
    //             'errors' => [
    //                 'required' => 'Field ini harus diisi.',
    //                 'numeric' => 'Nomor telepon harus berupa angka.',
    //             ],
    //         ],
    //         'password1' => [
    //             'label' => 'Password',
    //             'rules' => 'required|min_length[6]',
    //             'errors' => [
    //                 'required' => 'Field ini harus diisi.',
    //                 'min_length' => 'Password harus memiliki minimal 6 karakter.',
    //             ],
    //         ],
    //     ];

    //     if (!$this->validate($validationRules)) {
    //         $output = view('layouts/header');
    //         $output = view('layouts/navbar');
    //         $output .= view('register/registerPage', ['validation' => $this->validator]);
    //         $output .= view('layouts/footer');
    //         return $this->response->setBody($output);
    //     } 
    //     // Menyimpan data ke database
    //     $userModel->save([
    //         'nama'       => $this->request->getPost('name'),
    //         'email'      => $this->request->getPost('email'),
    //         'no_telepon' => $this->request->getPost('phone'),
    //         'kata_sandi' => password_hash($this->request->getPost('password1'), PASSWORD_BCRYPT), // Enkripsi password
    //     ]);

    //     // me-redirect user jika berhasil login ke halaman register dan memberi pesan akun berhasil dibuat
    //     return redirect()->to('register')->with('success', 'Akun berhasil dibuat! Kembali ke login page');