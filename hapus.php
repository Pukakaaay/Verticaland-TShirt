<?php
$koneksi = new mysqli("localhost", "root", "", "database_pelanggan");
$id = $_GET['id'];
$koneksi->query("DELETE FROM pelanggan WHERE id_pelanggan = $id");
header("Location: list.php");
?>
