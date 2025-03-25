<?php

echo "<h1>Jika eror coba cek di php my admin</h1>";

$host = "localhost";
$userdb = "root";
$passdb = "";
$namedb = "buku_tamu";

$conndb = mysqli_connect($host, $userdb, $passdb);

$dbname = "buku_tamu";
$query = mysqli_query($conndb, "CREATE DATABASE $dbname");

if ($query) {
  echo "<h1>database berhasil di buat</h1>";
} else {
  echo "Database gagal dibuat";
}

$conn = mysqli_connect($host, $userdb, $passdb,$dbname);


$createT1 = mysqli_query($conn, "CREATE TABLE keperluan (id INT AUTO_INCREMENT PRIMARY KEY, deskripsi VARCHAR(255))");

$createT2 = mysqli_query($conn, "CREATE TABLE tamu (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    pesan TEXT NOT NULL,
    keperluan_id INT,
    FOREIGN KEY (keperluan_id) REFERENCES keperluan(id) ON DELETE CASCADE ON UPDATE CASCADE
)");

if($createT1 && $createT2) {
  echo "<h1>Tabel berhasil di tambahkan</h1>";
}
?>