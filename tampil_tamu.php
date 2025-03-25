<?php
include 'koneksi.php';

$sql = "SELECT tamu.nama, tamu.email, keperluan.deskripsi AS keperluan, tamu.pesan, tamu.tanggal 
        FROM tamu 
        JOIN keperluan ON tamu.keperluan_id = keperluan.id 
        ORDER BY tamu.tanggal DESC 
        LIMIT 5";

$result = $conn->query($sql);

echo "<table border='1'>";
echo "<tr><th>Nama</th><th>Email</th><th>Keperluan</th><th>Pesan</th><th>Tanggal</th></tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['nama']}</td>
                <td>{$row['email']}</td>
                <td>{$row['keperluan']}</td>
                <td>{$row['pesan']}</td>
                <td>{$row['tanggal']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
}

echo "</table>";

$conn->close();
?>
