<?php 

$koneksi = mysqli_connect("localhost", "root", "", "pengelolaan_buku");

// check connection
if (mysqli_connect_error()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}