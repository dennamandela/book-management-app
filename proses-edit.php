<?php 
// koneksi database
include 'config/koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$kode = $_POST['kode_buku'];
$judul = $_POST['judul_buku'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun_terbit'];


// update data ke database
mysqli_query($koneksi,"update books set kode_buku='$kode', judul_buku='$judul', penulis='$penulis', penerbit='$penerbit', tahun_terbit='$tahun' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:data-buku.php");

?>