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
            <label for="first_name">Nama Depan</label>
            <input type="text" id="first_name" name="first_name" value="Sherly" required>
        </div>

        <div class="form-group">
            <label for="last_name">Nama Belakang</label>
            <input type="text" id="last_name" name="last_name" value="Chandra" required>
        </div>

        <div class="form-group">
            <label for="birth_date">Tanggal Lahir</label>
            <input type="date" id="date"  required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="sherly123@gmail.com" required>
        </div>

        <div class="form-group">
            <label for="address">Alamat</label>
            <input type="text" id="address" name="address" value="JL. Salak No. 2" required>
        </div>

        <div class="form-group">
            <label for="phone">Nomor Telepon</label>
            <input type="text" id="phone" name="phone" value="08**-****-7029" required>
        </div>

        <div class="form-group3">
            <label for="status">Status</label>
            <select id="status" name="status">
                <option>Belum Menikah</option>
                <option>Menikah</option>
            </select>
        
            <label for="group">Kelompok</label>
            <select id="group" name="group">
                <option>Umum</option>
                <option>Spesial</option>
            </select>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" value="********" required>
        </div>


        <button type="submit" class="submit-button">SIMPAN</button>
    </form>
</div>

<script>
    // Fungsi untuk memvalidasi input email
    function validateEmail() {
        const emailInput = document.getElementById('email');
        const emailCheckmark = emailInput.nextElementSibling;
        const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

        if (emailInput.value.match(emailPattern)) {
            emailCheckmark.style.display = 'inline';
        } else {
            emailCheckmark.style.display = 'none';
        }
    }

    // Fungsi untuk memvalidasi input password
    function validatePassword() {
        const passwordInput = document.getElementById('password');
        const passwordCheckmark = passwordInput.nextElementSibling;
        const passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

        if (passwordInput.value.match(passwordPattern)) {
            passwordCheckmark.style.display = 'inline';
        } else {
            passwordCheckmark.style.display = 'none';
        }
    }

    // Event listener untuk validasi email
    document.getElementById('email').addEventListener('input', validateEmail);

    // Event listener untuk validasi password
    document.getElementById('password').addEventListener('input', validatePassword);
</script>

</body>
</html>
