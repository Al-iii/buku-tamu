<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buku_tamu";

$conn = new mysqli($servername, $username, $password, $dbname);

$nama = "grace";
$email = "graceolivia@gmail.com";
$pesan = "helo, i want ask something.";
$keperluan_id = 1;

$sql = "INSERT INTO tamu (nama, email, pesan, keperluan_id) 
        VALUES ('$nama', '$email', '$pesan', '$keperluan_id')";

$conn->query($sql);

echo "Data berhasil dimasukkan.";

$conn->close();
?>
