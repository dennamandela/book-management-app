<?php

//koneksi database
include 'config/koneksi.php';

//menangkap data yang di kirim dari form

$buku_id = $_POST['buku_id'];
$rak = $_POST['nama_rak'];
$lokasi = $_POST['lokasi_rak'];

// menginput data ke database
mysqli_query ($koneksi, "insert into rack values ('', '$buku_id','$rak','$lokasi')");

//mengalihkan halaman ke rak-buku.php
header("location:rak-buku.php");

?>
