<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "web_scholar");

// ambil data dari data atau query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa limit 15");

#check corecction
if( !$result) {
      echo mysqli_error($conn);
}

?>


<!DOCTYPE html>
<html> 
<head>
      <title>Halaman Admin</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah Data Mahasiswa</a>
<br><br>
<table border= "1" cellpadding="10" cellspacing="0" >
      <tr>
            <th>no.</th>
            <th>aksi</th>
            <th>nim</th>
            <th>nama</th>
            <th>kode_prodi</th>
            <th>status_aktivitas</th>
      </tr>

      <?php $i=1;?>
      <?php while($row = mysqli_fetch_assoc($result)): ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td>
            <a href="">ubah</a> |
            <a href="">hapus</a>
        </td>
        <td><?php echo $row["nim"]; ?></td>
        <td><?php echo $row["nama"]; ?></td>
        <td><?php echo $row["kode_prodi"]; ?></td>
        <td><?php echo $row["status_aktivitas"]; ?></td>
      </tr>
      <?php $i++; ?>
      <?php endwhile; ?>

</table>
      
</body>
</html>