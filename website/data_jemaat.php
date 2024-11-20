<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Jemaat</title>
<link rel="stylesheet" href="css/pelayan_profetik.css">
<script src="js/data_jemaat.js" defer></script>
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
    <!-- Main Content -->
    <main class="content">
      <h1>Data Jemaat</h1>
      <div class="search-bar">
        <input type="text" placeholder="Cari jemaat">
        <a href="tambah_jemaat.php"><button class='add-button'>Tambah Jemaat + </button></a>
        <a href="sortir.php"><button class='sort-button'>Sortir</button></a>
      </div>

      <!-- Tabel Data Jemaat -->
      <section class="table-section">
        <h2>Data Jemaat</h2>
        <table>
          <thead>
            <tr>
              <th>Nama Jemaat</th>
              <th>ID Jemaat</th>
              <th>Email</th>
              <th>No. Telp</th>
              <th>Tgl Lahir</th>
              <th>Alamat</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody id="data-jemaat">
            <tr>
              <td>Sheryl Chandra</td>
              <td>0001</td>
              <td>sheryl123@gmail.com</td>
              <td>08xx-xxxx-xxxx</td>
              <td>30 April 1994</td>
              <td>Lorem ipsum</td>
              <td>Sudah Menikah</td>
              <td><a href="edit_jemaat.php" onclick="editJemaat()">✏️</a> <a href="hapus.php" onclick="deleteJemaat()">🗑️</a></td>
            </tr>
            <!-- Tambahkan baris lain sesuai kebutuhan -->
          </tbody>
        </table>
      </section>

      <!-- Tabel Permintaan Verifikasi -->
      <section class="table-section">
        <h2>Permintaan Verifikasi</h2>
        <table>
          <thead>
            <tr>
              <th>Nama Jemaat</th>
              <th>ID Jemaat</th>
              <th>Email</th>
              <th>No. Telp</th>
              <th>Tgl Lahir</th>
              <th>Alamat</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody id="verifikasi-jemaat">
            <tr>
              <td>Rena Paul</td>
              <td>0004</td>
              <td>sheryl123@gmail.com</td>
              <td>08xx-xxxx-xxxx</td>
              <td>30 April 2007</td>
              <td>Lorem ipsum</td>
              <td>Belum Menikah</td>
              <td>
                <a href="verifikasi.php" class="check" onclick="verifyJemaat('0004')">✔️</a> 
                <a href="hapus.php" class="delete" onclick="removeJemaat('0004')">❌</a>
              </td>
            </tr>
            <!-- Tambahkan baris lain sesuai kebutuhan -->
          </tbody>
        </table>
      </section>
    </main>
  </div>
</body>
</html>
