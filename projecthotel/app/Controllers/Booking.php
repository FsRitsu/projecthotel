<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\RoomModel;
use App\Models\UserModel;
use App\Models\BookingModel;

class Booking extends BaseController
{
    protected $bookingModel;
    protected $roomModel;
    protected $userModel;

    public function __construct()
    {
        $this->bookingModel = new BookingModel();
        $this->roomModel = new RoomModel();
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [];
        return view(name: 'layouts/header').
        view(name: 'layouts/navbar').
        view(name: 'booking/bookingPage').
        view(name: 'layouts/footer');
        //
    }
    
    public function create()
    {
        // Ambil semua data room dan user untuk ditampilkan di form
        $data['rooms'] = $this->roomModel->findAll();
        $data['users'] = $this->userModel->findAll();
        
        return view('booking/create', $data);
    }

    public function store()
    {
        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'user_id'    => 'required|is_not_unique[users.id]',
            'room_id'    => 'required|is_not_unique[rooms.id]',
            'checkin'    => 'required|valid_date',
            'checkout'   => 'required|valid_date',
            'total_price' => 'required|numeric',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Menyimpan data pemesanan
        $this->bookingModel->save([
            'user_id'    => $this->request->getVar('user_id'),
            'room_id'    => $this->request->getVar('room_id'),
            'checkin'    => $this->request->getVar('checkin'),
            'checkout'   => $this->request->getVar('checkout'),
            'status'     => 'pending',  // Status default adalah pending
            'total_price'=> $this->request->getVar('total_price'),
        ]);

        session()->setFlashdata('success', 'Booking berhasil dibuat!');
        return redirect()->to('/booking');
    }

    public function show($id)
    {
        $data['booking'] = $this->bookingModel->find($id);
        
        if (!$data['booking']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Booking with ID $id not found");
        }
        
        return view('booking/show', $data);
    }

    public function edit($id)
    {
        $data['booking'] = $this->bookingModel->find($id);
        $data['rooms'] = $this->roomModel->findAll();
        $data['users'] = $this->userModel->findAll();

        if (!$data['booking']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Booking with ID $id not found");
        }

        return view('booking/edit', $data);
    }

    // Proses memperbarui pemesanan
    public function update($id)
    {
        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'user_id'    => 'required|is_not_unique[users.id]',
            'room_id'    => 'required|is_not_unique[rooms.id]',
            'checkin'    => 'required|valid_date',
            'checkout'   => 'required|valid_date',
            'total_price' => 'required|numeric',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Memperbarui data pemesanan
        $this->bookingModel->update($id, [
            'user_id'    => $this->request->getVar('user_id'),
            'room_id'    => $this->request->getVar('room_id'),
            'checkin'    => $this->request->getVar('checkin'),
            'checkout'   => $this->request->getVar('checkout'),
            'status'     => $this->request->getVar('status'),  // Menambahkan status
            'total_price'=> $this->request->getVar('total_price'),
        ]);

        session()->setFlashdata('success', 'Booking berhasil diperbarui!');
        return redirect()->to('/booking');
    }

    // Menghapus pemesanan
    public function delete($id)
    {
        $this->bookingModel->delete($id);
        session()->setFlashdata('success', 'Booking berhasil dihapus!');
        return redirect()->to('/booking');
    }
}
