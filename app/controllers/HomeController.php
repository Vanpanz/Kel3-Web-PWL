<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        require_once '/../views/landing.php';
    }
}