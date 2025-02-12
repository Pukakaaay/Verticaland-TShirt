<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Logika untuk mengambil data pelanggan berdasarkan ID
    // Misalnya, $data = getDataPelangganById($id)

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $no_telp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];

        if ($_FILES['foto']['name']) {
            // Mengambil nama file foto dan menyimpannya
            $foto = $_FILES['foto']['name'];
            move_uploaded_file($_FILES['foto']['tmp_name'], "uploads/".$foto);
            // Proses pembaruan data pelanggan termasuk foto
            // updateDataPelanggan($id, $nama, $no_telp, $alamat, $foto);
        } else {
            // Proses pembaruan data pelanggan tanpa foto
            // updateDataPelanggan($id, $nama, $no_telp, $alamat);
        }

        header("Location: list.php");
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Pelanggan</title>
</head>
<body>
    <h2>Edit Data Pelanggan</h2>
    <form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Nama:</td>
            <td><input type="text" name="nama" value="<?= isset($data['nama']) ? $data['nama'] : '' ?>" required></td>
        </tr>
        <tr>
            <td>No Telepon:</td>
            <td><input type="text" name="no_telp" value="<?= isset($data['no_telp']) ? $data['no_telp'] : '' ?>" required></td>
        </tr>
        <tr>
            <td>Alamat:</td>
            <td><textarea name="alamat"><?= isset($data['alamat']) ? $data['alamat'] : '' ?></textarea></td>
        </tr>
        <tr>
            <td>Foto:</td>
            <td><input type="file" name="foto"></td>
        </tr>
        <?php if (isset($data['foto'])): ?>
            <tr>
                <td>Foto Sebelumnya:</td>
                <td><img src="uploads/<?= $data['foto'] ?>" width="100"></td>
            </tr>
        <?php endif; ?>
        <tr>
            <td colspan="2"><button type="submit">Simpan</button></td>
        </tr>
    </table>
</form>

    <a href="index.php">Kembali</a>
</body>
</html>
