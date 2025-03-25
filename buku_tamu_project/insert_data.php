<?php
include 'koneksi.php';

// Masukkan data keperluan jika belum ada
$conn->query("INSERT INTO keperluan (deskripsi) VALUES 
    ('Wawancara Kerja'), 
    ('Antar Dokumen'), 
    ('Konsultasi Produk'), 
    ('Janji Temu')
");

// Masukkan data tamu
$conn->query("INSERT INTO tamu (nama, email, pesan, keperluan_id) VALUES
    ('Alya Fitria', 'alya@example.com', 'Ingin bertanya soal layanan.', 1),
    ('Budi Santoso', 'budi@example.com', 'Menyerahkan dokumen.', 2),
    ('Citra Dewi', 'citra@example.com', 'Ingin konsultasi produk.', 3),
    ('Dimas Yoga', 'dimas@example.com', 'Datang atas undangan.', 4)
");

echo "Data awal berhasil ditambahkan ✅";
$conn->close();
?>
