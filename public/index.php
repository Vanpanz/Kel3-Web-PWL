<?php

/**
 * SENTRA - Entry Point
 */

// 1. Load Core Router
require_once '../app/core/Router.php';

// 2. Load Controllers secara manual 
// (Wajib karena kita belum pakai autoloader otomatis)
require_once '../app/controllers/AuthController.php';
require_once '../app/controllers/HomeController.php';

use App\Core\Router;

// 3. Definisi BASEURL untuk CSS, JS, dan Link agar tidak patah
define('BASEURL', 'http://localhost:3000');

$router = new Router();

// --- DAFTAR RUTE (ROUTES) ---

// Halaman Login & Autentikasi
$router->add('GET', '/', 'AuthController', 'login');
$router->add('GET', '/login', 'AuthController', 'login');
$router->add('POST', '/login/auth', 'AuthController', 'authenticate');

// Halaman Dashboard
$router->add('GET', '/home', 'HomeController', 'index');

// Halaman Detail Event (Menggunakan parameter {id})
$router->add('GET', '/event/{id}', 'HomeController', 'detail');

// --- JALANKAN SISTEM ---
$router->run();