<?php
    include "../../config/koneksi.php";
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($koneksi, "select * from admin where username='$username' and password='$password'");
    $check = mysqli_fetch_array($query);

    if ($check) {
        $_SESSION['username'] = $username;
        ?><center>Anda berhasil login. Silahkan menuju <a href="../../index.php">Halaman Home</a></center><?php
    } else {
        ?><center>Anda gagal login. Silahkan <a href="../../page/admin/form.php">Login Kembali</a></center><?php
        echo mysqli_error($koneksi);
    }
?>