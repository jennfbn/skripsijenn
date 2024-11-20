<?php
ob_start(); // Mulai output buffering
session_start();
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form login
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    
    // Query untuk memeriksa username dan password
    $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) == 1) {
        // Jika login berhasil, set session
        $_SESSION['username'] = $username;
        header("Location: beranda.php"); // Redirect ke halaman beranda
        exit();
    } else {
        // Jika login gagal, tampilkan pesan
        echo "<script>alert('Username atau password salah'); window.location.href='login.php';</script>";
    }
}

ob_end_flush(); // Akhiri output buffering
?>
