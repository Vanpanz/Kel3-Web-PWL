<?php

namespace App\Controllers;

use App\Core\Database;

class AuthController
{
    public function login()
    {
        require __DIR__ . '/../views/auth/login.php';
    }

    public function authenticate()
    {
        session_start();

        $db = new Database();
        $conn = $db->getConnection();

        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE email = ?";
        $stmt = mysqli_prepare($conn, $query);

        mysqli_stmt_bind_param($stmt, 's', $email);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        $user = mysqli_fetch_assoc($result);

        if ($user && password_verify($password, $user['password'])) {

            session_regenerate_id(true);
            $_SESSION['user'] = $user;

            header("Location: /home");
            exit;

        } else {

            echo "Email atau password salah";

        }
    }
}