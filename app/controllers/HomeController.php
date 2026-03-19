<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        // Gunakan __DIR__ agar path-nya absolut dan tidak error lagi
        require_once __DIR__ . '/../views/home/homepage.php';
    }

    public function detail($id)
{
    // Nantinya di sini kita ambil data dari database berdasarkan $id
    // Untuk sekarang, kita panggil saja view-nya
    require_once __DIR__ . '/../views/home/detail.php';
}
}

