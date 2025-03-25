<?php
  include "koneksi.php";

  $query = "SELECT tamu.id, tamu.nama, tamu.email, tamu.pesan, keperluan.deskripsi 
  FROM tamu 
  JOIN keperluan ON tamu.keperluan_id = keperluan.id LIMIT 5";

$tampilkan = mysqli_query($conn, $query);
?>

<html>
<head>
    <title>Daftar Tamu</title>
</head>
<body>
    <h2>Daftar Tamu</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Pesan</th>
            <th>Keperluan</th>
        </tr>
        <?php
        if (mysqli_num_rows($tampilkan) > 0) {
            while ($row = mysqli_fetch_assoc($tampilkan)) {
                echo "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['nama']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['pesan']."</td>
                        <td>".$row['deskripsi']."</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Tidak ada data tamu</td></tr>";
        }
        ?>
    </table>
</body>
</html>