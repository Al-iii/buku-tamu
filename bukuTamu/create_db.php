<?php

$host = "localhost";
$userdb = "root";
$passdb = "";
$namedb = "buku__Tamu";

$conndb = mysqli_connect($host, $userdb, $passdb);

$dbname = "buku__Tamu";
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
  echo "Database dan tabel berhasil dibuat.";
}
?>