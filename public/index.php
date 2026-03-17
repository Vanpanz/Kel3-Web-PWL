<?php

require_once '../app/core/Router.php';

use App\Core\Router;

$router = new Router();

/* REGISTER ROUTES */

// halaman pertama langsung login                   yg auth ini bpk blg ubah jadi landing, tapi kalau d ubah jadi eror
$router->add('GET', '/login', 'AuthController', 'login');

// proses login
 $router->add('POST', '/', 'AuthController', 'authenticate');

// contoh halaman setelah login
$router->add('GET', '/home', 'HomeController', 'index');

$router->run();