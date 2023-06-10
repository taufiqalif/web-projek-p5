<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        // Logika atau proses yang ingin dilakukan di halaman dashboard

        // Misalnya, mengambil data dari model dan mempassingnya ke view
        $data = [
            'title' => 'Dashboard',
            'message' => 'Selamat datang di halaman dashboard!'
        ];

        // Menampilkan view dashboard dengan data yang dipassing
        return view('dashboard/index', $data);
    }

    public function daftarsiswa()
    {
        // Logika atau proses yang ingin dilakukan di halaman dashboard
        $data = [
            'title' => 'Daftar Siswa',
            'message' => 'Selamat datang di halaman daftar siswa!'
        ];
        return view('dashboard/daftarsiswa', $data);
    }

    public function admin()
    {
        // Periksa peran pengguna
        if (session('role') == 1) {
            // Jika peran adalah admin, lakukan logika atau proses yang ingin dilakukan di halaman admin
            $data = [
                'title' => 'Admin',
                'message' => 'Selamat datang di halaman admin!',
                'username' => session('username')
            ];
            return view('dashboard/admin', $data);
        } else {
            // Jika peran bukan admin, tampilkan pesan error dalam bentuk popup
            $data = [
                'title' => 'Error',
                'message' => 'Anda tidak memiliki akses ke halaman admin.'
            ];
            return view('dashboard/error', $data);
        }
    }

    public function logout()
    {
        // Lakukan logika logout di sini

        // Redirect ke halaman login setelah logout
        return redirect()->to(base_url('user/login'));
    }
}
