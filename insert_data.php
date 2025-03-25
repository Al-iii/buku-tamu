<?php
include "koneksi.php";
$insertK = "INSERT INTO keperluan (deskripsi) VALUES
('Meeting Bisnis'),
('Kunjungan Kerja'),
('Studi Lapangan'),
('Interview Kerja'),
('Keperluan Pribadi');
";

$insertT = "INSERT INTO tamu (nama, email, pesan, keperluan_id) VALUES
('Budi Santoso', 'budi@example.com', 'Ingin bertemu dengan HRD', 4),
('Siti Aminah', 'siti@example.com', 'Membahas kontrak kerja', 1),
('Joko Widodo', 'joko@example.com', 'Menghadiri seminar perusahaan', 2),
('Ani Rahmawati', 'ani@example.com', 'Studi lapangan terkait bisnis', 3),
('Doni Saputra', 'doni@example.com', 'Keperluan pribadi', 5);
";

$keperluan = mysqli_query($conn, $insertK );
$tamu = mysqli_query($conn, $insertT );

if($keperluan && $tamu) {
  echo "Data Awal Berhasi Ditambahkan";
}
?>