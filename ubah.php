<?php 
require 'function.php';

//ambil data di url
$id = $_GET["id"];

//query data mahasiswa berdsarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

//cek apakah tombol submit sudah ditekan atau belom
if( isset($_POST["submit"]) ) {

    //cek data apkh berhasil d ubah
    if(ubah($_POST) > 0) {
        echo "<script>
                alert('data berhasil diubah');
                document.location.href = 'index2.php';
            </script>
            ";
    } else {
        echo "<script>
                alert('data gagal diubah');
                document.location.href = 'index2.php';
            </script>
            ";
    }
 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nim">nim :</label>
                <input type="text" name="nim" id="nim"
                required>
            </li>
            <li>
            <label for="nama">nama :</label>
            <input type="text" name="nama" id="nama"
            required>
            </li>
            <li>
            <label for="prodi">kode_prodi :</label>
            <input type="text" name="prodi" id="prodi"
            required>
            </li>
            <li>
            <label for="status">status_aktivitas :</label>
            <input type="text" name="status" id="status"
            required>
            </li>
            <button type="submit" name="submit">Tambah Data</button>
        </ul>
    </form>
</body>
</html>