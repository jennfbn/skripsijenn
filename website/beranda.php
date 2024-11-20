<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard - GBI Rumah Doa Jemaat Baubau</title>
  <link rel="stylesheet" href="css/beranda.css">
  <link href="//fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
</head>
<body>
<div class="sidebar">
    <img src="gbi.jpg" alt="Logo GBI Rumah Doa" class="sidebar-logo">
    <h3>Selamat Datang, Admin!</h3>
    <ul>
      <li><a href="beranda.php">Beranda</a></li>
      <li><a href="data_jemaat.php">Data Jemaat</a></li>
      <li><a href="pelayan_profetik.php">Pelayan Profetik</a></li>
      <li><a href="warta_jemaat.php">Warta Jemaat</a></li>
      <li><a href="mezbah_keluarga.php">Mezbah Keluarga</a></li>
      <li><a href="kegiatan_sosial.php">Kegiatan Sosial</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
</div>

  <div class="main-content">
    <h1>Beranda</h1>
    <div class="dashboard">
      <div class="card">
        <h2>Total Jemaat</h2>
        <p>10,000</p>
      </div>
      <div class="card">
        <h2>Total Pelayan Profetik</h2>
        <p>100</p>
      </div>
    </div>
    <div class="dashboard">
      <div class="card-birthday">
        <h2>Jemaat yang Berulang Tahun Minggu Ini:</h2>
        <div class="birthday-list">
          <input type="text" placeholder="Value">
          <input type="text" placeholder="Value">
        </div>
</div> 
  </div>
</div>
</body>
</html>
