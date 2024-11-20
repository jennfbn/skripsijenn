<?php
session_start();
session_destroy(); // Mengakhiri semua sesi
header("Location: index.php"); // Redirect ke halaman index.php
exit();
?>
