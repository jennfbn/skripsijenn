<?php
// verifikasi.php
header('Content-Type: application/json');

// Koneksi ke database
$conn = new mysqli("localhost", "username", "password", "nama_database");

if ($conn->connect_error) {
    die(json_encode(["success" => false, "message" => "Database connection failed"]));
}

// Ambil data yang dikirim oleh JavaScript
$data = json_decode(file_get_contents("php://input"), true);
$id = $data['id'];

// Query untuk mengupdate status jemaat
$sql = "UPDATE jemaat SET status='verified' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "message" => "Error updating record"]);
}

$conn->close();
?>
