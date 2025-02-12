<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css">

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
        <tr>
            <td>1</td>
            <td>Kayla</td>
            <td>085xxxxxx</td>
            <td><img src="foto.jpg" width="50"></td>
            <td>
                <a href="detail.php?id=1">Detail</a> |
                <a href="edit.php?id=1">Edit</a> |
                <a href="#" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>John Doe</td>
            <td>087xxxxxx</td>
            <td><img src="foto.jpg" width="50"></td>
            <td>
                <a href="detail.php?id=2">Detail</a> |
                <a href="edit.php?id=2">Edit</a> |
                <a href="#" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Michael</td>
            <td>089xxxxxx</td>
            <td><img src="foto.jpg" width="50"></td>
            <td>
                <a href="detail.php?id=3">Detail</a> |
                <a href="edit.php?id=3">Edit</a> |
                <a href="#" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
    </table>
</body>
</html>