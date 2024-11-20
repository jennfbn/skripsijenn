<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mezbah Keluarga</title>
<link rel="stylesheet" href="css/mezbah_keluarga.css">
<script src="js/mezbah_keluargas.js" defer></script>
</head>
<body>
  <div class="container">
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
    <!-- Content -->
    <div class="content">
            <h1>Mezbah Keluarga</h1>
            
            <!-- Card 1 -->
            <div class="card">
                <div class="card-image">
                    <img src="placeholder.png" alt="Placeholder Image">
                </div>
                <div class="card-content">
                    <h2>Mezbah Keluarga Wilayah I</h2>
                    <p>Ketua MK Wilayah I : <br>Nomor Telepon : <br>Setiap Hari Senin</p>
                   <a href="detail_mk1.php" >Detail </a>
                </div>
                <div class="card-actions">
                <td><a href="edit_mk1.php" onclick="editJemaat()">✏️</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card">
                <div class="card-image">
                    <img src="placeholder.png" alt="Placeholder Image">
                </div>
                <div class="card-content">
                    <h2>Mezbah Keluarga Wilayah II</h2>
                    <p>Ketua MK Wilayah II : <br>Nomor Telepon : <br>Setiap Hari Selasa</p>
                    <a href="detail_mk2.php" >Detail <a/>
                </div>
                <div class="card-actions">
                <td><a href="edit_mk2.php" onclick="editJemaat()">✏️</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card">
                <div class="card-image">
                    <img src="placeholder.png" alt="Placeholder Image">
                </div>
                <div class="card-content">
                    <h2>Mezbah Keluarga Wilayah III</h2>
                    <p>Ketua MK Wilayah III : <br>Nomor Telepon : <br>Setiap Hari Jumat</p>
                    <a href="detail_mk3.php" >Detail </a>
                </div>
                <div class="card-actions">
                <td><a href="edit_mk3.php" onclick="editJemaat()">✏️</a>
                </div>
            </div>
        </div>
    </div>
  </div>
</body>
</html>
