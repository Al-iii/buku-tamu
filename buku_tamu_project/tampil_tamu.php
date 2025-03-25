<?php
include 'koneksi.php';

$sql = "SELECT tamu.nama, tamu.email, keperluan.deskripsi AS keperluan, tamu.pesan, tamu.created_at 
        FROM tamu 
        JOIN keperluan ON tamu.keperluan_id = keperluan.id
        ORDER BY tamu.created_at DESC
        LIMIT 5";

$result = $conn->query($sql);

echo "<h1>Tampil_tamu.php</h1>";
echo "<h2>Daftar Tamu</h2>";
echo "<table border='1' cellspacing='0' cellpadding='8'>
<tr>
    <th>Nama</th>
    <th>Email</th>
    <th>Keperluan</th>
    <th>Pesan</th>
    <th>Tanggal</th>
</tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['nama']}</td>
            <td>{$row['email']}</td>
            <td>{$row['keperluan']}</td>
            <td>{$row['pesan']}</td>
            <td>{$row['created_at']}</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
}

echo "</table>";
echo "<p><a href='form_tamu.php'>← Kembali ke Form</a></p>";

$conn->close();
?>
