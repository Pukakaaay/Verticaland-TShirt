<?php
// Koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "database_pelanggan");

// Ambil data pelanggan
$result = $koneksi->query("SELECT * FROM pelanggan");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Pelanggan</title>
</head>
<body>
    <h2>Daftar Pelanggan</h2>
    <a href="tambah.php"><button>Tambah Pelanggan</button></a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No Telepon</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id_pelanggan'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['no_telp'] ?></td>
            <td><img src="uploads/<?= $row['foto'] ?>" width="50"></td>
            <td>
                <a href="detail.php?id=<?= $row['id_pelanggan'] ?>">Detail</a> | 
                <a href="edit.php?id=<?= $row['id_pelanggan'] ?>">Edit</a> | 
                <a href="hapus.php?id=<?= $row['id_pelanggan'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
