<?php


$servername = "localhost";
$database = "uinsi32_2441919013";
$username = "root";
$password =  "";

// Buat koneksi database

$conn = mysqli_connect($servername,$username,$password,$database);

// Cek Koneksi

if (!$conn) {
    die("Koneksi Gagal".mysqli_connect_error());
}

echo "Koneksi Gacor!";
// mysqli_close();
?>