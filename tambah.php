<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];


    $foto = $_FILES['foto']['name'];
    move_uploaded_file($_FILES['foto']['tmp_name'], "uploads/".$foto);

    header("Location: list.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pelanggan</title>
    <link rel="stylesheet" href="tambah.css">
</head>
<body>
    <div class="container">
        <h2>Tambah Pelanggan</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nama Pelanggan:</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>No Telepon:</td>
                    <td><input type="text" name="no_telp" required></td>
                </tr>
                <tr>
                    <td>Alamat:</td>
                    <td><textarea name="alamat"></textarea></td>
                </tr>
                <tr>
                    <td>Foto:</td>
                    <td><input type="file" name="foto"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <button type="submit">Simpan</button>
                    </td>
                </tr>
            </table>
        </form>
        <a href="index.php">Kembali</a>
    </div>
</body>
</html>

