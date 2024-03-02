<?php

$server_name = "localhost";
$user_name = "root";
$password_name = "";
$database_name = "masjayacourse";

$conn = new mysqli($server_name, $user_name, $password_name, $database_name);

if ($conn->connect_error) {
    die("koneksi gagal : " . $conn->error);
}
