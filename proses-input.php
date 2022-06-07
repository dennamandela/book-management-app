<?php

//koneksi database
include 'config/koneksi.php';

//menangkap data yang di kirim dari form

$kd_buku = $_POST['kode_buku'];
$jd_buku = $_POST['judul_buku'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];

// menginput data ke database
mysqli_query ($koneksi, "insert into books values ('', '$kd_buku','$jd_buku','$penulis','$penerbit','$tahun_terbit')");

//mengalihkan halaman ke data-buku.php
header("location:data-buku.php");

?>
