<?php
    include "../../config/koneksi.php";

    $kd_matakuliah = $_POST['kd_matakuliah'];
    $nm_matakuliah = $_POST['nm_matakuliah'];
    $sks = $_POST['sks'];
    $semester = $_POST['semester'];
    $query = mysqli_query($koneksi, "insert into matakuliah(kd_matakuliah, nm_matakuliah, sks, semester) values ('$kd_matakuliah', '$nm_matakuliah', '$sks', '$semester')");

    if($query) {
        echo "<center>Berhasil input data ke database</center>"
        ?><center><a href="../../page/matakuliah/tabel.php">Lihat data di Tabel</a></center><?php
    } else {
        echo "<center>Gagal input data</center>";
        echo mysqli_error($koneksi);
    }
?>