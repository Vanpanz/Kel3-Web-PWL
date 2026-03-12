<?php

namespace App\Core;

class Database
{
    private $conn;

    public function __construct()
    {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "blogger";

        $this->conn = mysqli_connect($host, $username, $password, $database);

        if (!$this->conn) {
            die("Koneksi database gagal: " . mysqli_connect_error());
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}