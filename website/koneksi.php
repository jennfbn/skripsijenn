<?php
$host = "localhost"; // Host database
$username = "root"; // Username database
$password = "12345678"; // Password database
$database = "gbird"; // Nama database Anda

$koneksi = mysqli_connect($host, $username, $password, $database);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
