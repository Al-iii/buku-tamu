<?php
$host = "localhost";
$user = "root";
$pass = "";

$dbname = "buku__Tamu";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
	echo "Koneksi database berhasil";
}
