<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
  public function login()
  {
    $data = [
      'title' => 'Selamat Datang'
    ];

    return view('user/login', $data);
  }


    public function registration()
    {
        $data = [
            'title' => 'Registrasi'
        ];

        return view('user/register', $data);
    }

    public function processRegistration()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Validasi data

        // Buat instance dari UserModel
        $model = new UserModel();

        // Cek apakah username sudah digunakan
        $existingUser = $model->where('username', $username)->first();
        if ($existingUser) {
            // Jika username sudah digunakan, kembali ke halaman registrasi dengan pesan error
            $data = [
                'title' => 'Registrasi',
                'error' => 'Username sudah digunakan'
            ];

            return view('user/register', $data);
        }

        // Hash password sebelum disimpan ke database
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Simpan data user ke database
        $data = [
            'username' => $username,
            'password' => $hashedPassword,
            'role' => 0 // 0 untuk user biasa
        ];
        $model->insert($data);

        // Redirect ke halaman login dengan pesan sukses
        return redirect()->to('user/login')->with('success', 'Registrasi berhasil. Silakan login dengan akun baru Anda.');
    }




  public function processLogin()
  {
      $username = $this->request->getPost('username');
      $password = $this->request->getPost('password');
  
      // Cek apakah user ditemukan
$userModel = new UserModel();
$user = $userModel->where('username', $username)->first();

if ($user && password_verify($password, $user['password'])) {
    // Cek peran user
    if ($user['role'] == 1) {
        // Jika peran adalah admin, redirect ke halaman dashboard admin
        return redirect()->to('dashboard/index');
    } else {
        // Jika peran adalah user, redirect ke halaman dashboard user
        return redirect()->to('dashboard/index');
    }
} else {
    // Jika tidak valid, kembali ke halaman login dengan pesan error
    $data = [
        'title' => 'Selamat Datang',
        'error' => 'Username atau password salah'
    ];

    // Tampilkan pesan error dalam bentuk alert
    session()->setFlashdata('error', 'Username atau password salah');

    return view('user/login', $data);
}
  }
  


  public function logout()
  {
      // Lakukan logika logout di sini
  
      // Redirect ke halaman login setelah logout
      return redirect()->to(base_url('user/login'));
  }
  
}
