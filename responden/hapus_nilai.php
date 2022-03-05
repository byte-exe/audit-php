<?php
include 'koneksi.php';
$ambil = $kon->query("SELECT * FROM nilai WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$kon->query ("DELETE FROM nilai WHERE id='$_GET[id]'");

echo "<script>alert('DATA TERHAPUS');</script>";
echo "<script>location='index.php?halaman=list_nilai';</script>";

?>