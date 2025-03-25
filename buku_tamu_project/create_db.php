<?php
$servername = "localhost";
$username = "root";  // Sesuaikan dengan username MySQL Anda
$password = "";  // Sesuaikan dengan password MySQL Anda
$dbname = "buku_tamu";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Buat database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database berhasil dibuat<br>";
} else {
    echo "Error membuat database: " . $conn->error;
}

// Pilih database
$conn->select_db($dbname);

// Buat tabel keperluan
$sql = "CREATE TABLE IF NOT EXISTS keperluan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    deskripsi VARCHAR(255) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Tabel 'keperluan' berhasil dibuat<br>";
} else {
    echo "Error membuat tabel: " . $conn->error;
}

// Buat tabel tamu
$sql = "CREATE TABLE IF NOT EXISTS tamu (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    pesan TEXT NOT NULL,
    keperluan_id INT,
    tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (keperluan_id) REFERENCES keperluan(id)
)";
if ($conn->query($sql) === TRUE) {
    echo "Tabel 'tamu' berhasil dibuat<br>";
} else {
    echo "Error membuat tabel: " . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
