<?php
    $koneksi = mysqli_connect("localhost", "root", "", "akademik");
    if($koneksi) {
        echo " ";
    } else {
        echo "gagal menghubungkan ke database!";
    }
?>