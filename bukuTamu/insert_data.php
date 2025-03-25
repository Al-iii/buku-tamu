<?php
include "koneksi.php";

$insertK = "INSERT INTO keperluan (deskripsi) VALUES
('Presentasi Proyek'),
('Rapat Divisi'),
('Survey Lokasi'),
('Pelatihan Karyawan'),
('Kunjungan Keluarga');
";

$insertT = "INSERT INTO tamu (nama, email, pesan, keperluan_id) VALUES
('Andi Prasetyo', 'andi@example.com', 'Ingin mempresentasikan proyek baru', 1),
('Lina Sari', 'lina@example.com', 'Menghadiri rapat divisi', 2),
('Fajar Nugroho', 'fajar@example.com', 'Melakukan survey lokasi bisnis', 3),
('Rina Kurnia', 'rina@example.com', 'Mengikuti pelatihan karyawan', 4),
('Bambang Setiawan', 'bambang@example.com', 'Menemui keluarga', 5);
";

$keperluan = mysqli_query($conn, $insertK);
$tamu = mysqli_query($conn, $insertT);

if($keperluan && $tamu) {
  echo "Data Baru Berhasil Ditambahkan";
}
?>
