<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kegiatan Sosial</title>
<link rel="stylesheet" href="css/tambah_jemaat.css">
</head>
<body>
  <div class="container">
  <div class="main-container">
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
    <div class="form-container">
    <form action="submit.php" method="post">
        <div class="form-group">
            <label for="first_name">Nama Kegiatan Sosial</label>
            <input type="text" id="first_name" name="first_name" value="Sherly" required>
        </div>

        <div class="form-group">
            <label for="last_name">Tempat Pelaksanaan</label>
            <input type="text" id="address" name="address" value="JL. Salak No. 2" required>
        </div>

        <div class="form-group">
            <label for="birth_date">Tanggal Pelaksanaan</label>
            <input type="date" id="date"  required>
        </div>

        <div class="form-group">
            <label for="birth_date">Waktu Pelaksanaan</label>
            <input type="time" id="time"  required>
        </div>

        <div class="form-group">
            <label for="address">Detail</label>
            <input type="text" id="address" name="address" value="JL. Salak No. 2" required>
        </div>
        <button type="submit" class="submit-button">SIMPAN</button>
</div>
    </body>
</html>
