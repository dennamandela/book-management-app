<?php
    //mengaktifkan session php
    session_start();

    //menghubungkan dengan koneksi
    include 'config/koneksi.php';

    //menangkap data yang dikirim dari form
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $data = mysqli_query($koneksi, "select * from users where username='$username' and password='$password'");

    //menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);

    if ($cek > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header ("location:dashboard.php"); 
    } else {
        header ("location:index.php?pesan=gagal");
    }
?>

