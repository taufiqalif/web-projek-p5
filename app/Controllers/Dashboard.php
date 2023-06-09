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
}
