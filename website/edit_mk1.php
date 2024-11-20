<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit MK 1</title>
<link rel="stylesheet" href="css/edit_mk.css">
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
    <h2>Mezbah Keluarga Wilayah 1</h2>
    <form action="submit.php" method="post">
        <div class="form-group">
            <label for="nama_ibadah">Ketua MK Wilayah 1</label>
            <input type="text" id="first_name" name="first_name" value="Sherly" required>
        </div>

        <div class="form-group">
            <label for="tanggal">Nomor Telepon</label>
            <input type="text" id="phone" name="phone" value="08**-****-7029" required>
        </div>

        <div class="form-group3">
            <label for="status">Hari</label>
            <select id="status" name="status">
                <option>Setiap Senin</option>
                <option>Setiap Selasa</option>
                <option>Setiap Rabu</option>
                <option>Setiap Kamis</option>
                <option>Setiap Jumat</option>
                <option>Setiap Sabtu</option>
            </select>

        <div class="form-group">
            <label for="tempat">Tempat</label>
            <input type="text" id="address" name="address" value="JL. Salak No. 2" required>
        </div>

        <div class="form-group">
            <label for="phone">Detail</label>
            <input type="text" id="detail" required>
        </div>
        <div>
        <button type="submit" class="submit-button">SIMPAN</button>
</div>
    </form>
</div>
</body>
</html>
