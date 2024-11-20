<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Jemaat</title>
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
            <label for="first_name">Nama Pelayan</label>
            <input type="text" id="first_name" name="first_name" value="Sherly" required>
        </div>

        <div class="form-group">
            <label for="last_name">ID Jemaat</label>
            <input type="text" id="last_name" name="last_name" value="Chandra" required>
        </div>

        <div class="form-group">
            <label for="last_name">ID Pelayan</label>
            <input type="text" id="last_name" name="last_name" value="Chandra" required>
        </div>

        <div class="form-group3">
            <label for="status">Tipe Ibadah</label>
            <select id="status" name="status">
                <option>Ibadah Raya</option>
                <option>Sekolah Minggu</option>
</select>

        <div class="form-group3">
            <label for="status">Keahlian 1</label>
            <select id="status" name="status">
                <option>WL</option>
                <option>Singers</option>
</select>
                <label for="status">Skor Keahlian 1</label>
            <select id="status" name="status">
                <option>0</option>
                <option>1</option>
            </select>
            
</div>

<div class="form-group3">
            <label for="status">Keahlian 2</label>
            <select id="status" name="status">
                <option>WL</option>
                <option>Singers</option>
</select>
                <label for="status">Skor Keahlian 2</label>
            <select id="status" name="status">
                <option>0</option>
                <option>1</option>
            </select>
            
</div>

<div class="form-group3">
            <label for="status">Keahlian 3</label>
            <select id="status" name="status">
                <option>WL</option>
                <option>Singers</option>
</select>
                <label for="status">Skor Keahlian 3</label>
            <select id="status" name="status">
                <option>0</option>
                <option>1</option>
            </select>
            
</div>

<div class="form-group3">
            <label for="status">Keahlian 4</label>
            <select id="status" name="status">
                <option>WL</option>
                <option>Singers</option>
</select>
                <label for="status">Skor Keahlian 4</label>
            <select id="status" name="status">
                <option>0</option>
                <option>1</option>
            </select>
            
</div>

<div class="form-group3">
            <label for="status">Keahlian 5</label>
            <select id="status" name="status">
                <option>WL</option>
                <option>Singers</option>
</select>
                <label for="status">Skor Keahlian 5</label>
            <select id="status" name="status">
                <option>0</option>
                <option>1</option>
            </select>
            
</div>

<button type="submit" class="submit-button">SIMPAN</button>
</body>
</html>
