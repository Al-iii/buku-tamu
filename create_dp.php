<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS buku_tamu";
if ($conn->query($sql) === TRUE) {
    echo "Database berhasil dibuat.<br>";
} else {
    echo "Gagal membuat database: " . $conn->error;
}

$conn->close();
?>
