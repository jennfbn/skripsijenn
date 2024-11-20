<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Buat Jadwal Profetik</title>
<link rel="stylesheet" href="css/buat_jadwal_profetik.css">
<script src="js/buat_jadwal_profetik.js" defer></script>
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
        <div>
      <h1>Buat Jadwal Profetik</h1>
      </div>

      <!-- Tabel Data Jemaat -->
      <section class="table-section">
        <h2>Ibadah Raya Minggu</h2>
        <table>
          <thead>
            <tr>
              <th>Tanggal</th>
              <th>WL</th>
              <th>Singers</th>
              <th>Drum</th>
              <th>Bass</th>
              <th>Piano</th>
              <th>Gitar</th>
              <th>Tamborine</th>
              <th>Multimedia</th>
              <th>Usher</th>
              <th>Doa persembahan</th>
            </tr>
          </thead>
          <tbody id="data-jemaat">
            <tr>
              <td>1 November 2024</td>
              <td>Sheryl Chandra</td>
              <td>Sheryl Chandra</td>
              <td>Tenri</td>
              <td>Sheryl Chandra</td>
              <td>Sheryl Chandra</td>
              <td>Sheryl Chandra</td>
              <td>Sheryl Chandra, Sheryl Chandra</td>
              <td>Sheryl Chandra</td>
              <td>Sheryl Chandra, Sheryl Chandra</td>
              <td>Sheryl Chandra</td>
            </tr>
            <!-- Tambahkan baris lain sesuai kebutuhan -->
          </tbody>
        </table>
      </section>
      <section>
      <a href=#><button class="add-button">Buat Jadwal +</button></a>
      <a href=#><button class="sort-button">Unggah</button></a>
</section>
      <section class="table-section">
        <h2>Ibadah Sekolah Minggu</h2>
        <table>
          <thead>
            <tr>
              <th>Tanggal</th>
              <th>WL</th>
              <th>Singers</th>
              <th>Musik</th>
              <th>Pendamping</th>
              <th>Firman Kelas A</th>
              <th>Firman Kelas B</th>
              <th>Kameramen</th>
            </tr>
          </thead>
          <tbody id="data-jemaat">
            <tr>
              <td>1 November 2024</td>
              <td>Sheryl Chandra</td>
              <td>Sheryl Chandra</td>
              <td>Sheryl Chandra</td>
              <td>Sheryl Chandra, Sheryl Chandra</td>
              <td>Sheryl Chandra</td>
              <td>Sheryl Chandra</td>
              <td>Sheryl Chandra</td>
            </tr>
            <!-- Tambahkan baris lain sesuai kebutuhan -->
          </tbody>
        </table>
      </section>
      <section>
      <a href=#><button class="add-button">Buat Jadwal +</button></a>
      <a href=#><button class="sort-button">Unggah</button></a>
</section>
      <section class="table-section">
        <h2>Ibadah Doa Malam</h2>
        <table>
          <thead>
            <tr>
              <th>Tanggal</th>
              <th>WL</th>
              <th>Singers</th>
              <th>Drum</th>
              <th>Bass</th>
              <th>Piano</th>
              <th>Gitar</th>
              <th>Multimedia</th>
            </tr>
          </thead>
          <tbody id="data-jemaat">
            <tr>
              <td>1 November 2024</td>
              <td>Sheryl Chandra</td>
              <td>Sheryl Chandra, Sheryl Chandra</td>
              <td>Sheryl Chandra</td>
              <td>Sheryl Chandra</td>
              <td>Sheryl Chandra</td>
              <td>Sheryl Chandra</td>
              <td>Sheryl Chandra</td>
            </tr>
            <!-- Tambahkan baris lain sesuai kebutuhan -->
          </tbody>
        </table>
      </section>
      <section>
      <a href=#><button class="add-button">Buat Jadwal +</button></a>
      <a href=#><button class="sort-button">Unggah</button></a>
</section>
    </main>
  </div>
</body>
</html>
