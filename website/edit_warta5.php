<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Warta</title>
    <link rel="stylesheet" href="css/edit_warta.css">
</head>
<body>
    <div class="container">
        <div class="main-container">
            <!-- Sidebar -->
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

            <!-- Form Containers -->
            <div class="content">
                <div class="form-container">
                    <h2>Kamis</h2>
                    <form action="submit.php" method="post">
                        <div class="form-group">
                            <label for="nama_ibadah">Nama Ibadah / Kegiatan</label>
                            <input type="text" id="first_name" name="first_name" value="Sherly" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" id="date" name="tanggal" required>
                        </div>
                        <div class="form-group">
                            <label for="pukul">Pukul</label>
                            <input type="time" id="time" name="pukul" required>
                        </div>
                        <div class="form-group">
                            <label for="tempat">Tempat</label>
                            <input type="text" id="address" name="address" value="JL. Salak No. 2" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Pelayan</label>
                            <input type="text" id="phone" name="phone" value="08**-****-7029" required>
                        </div>
                        <div class="form-group">
                            <label for="detail">Detail</label>
                            <input type="text" id="detail" name="detail" required>
                        </div>
                        <div class="button-group">
                            <button type="button" class="add-button">TAMBAH +</button>
                            <button type="submit" class="submit-button">SIMPAN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>