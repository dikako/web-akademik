<?php
    include "../../config/koneksi.php";

    $kd_matakuliah = $_POST['kd_matakuliah'];
    $nm_matakuliah = $_POST['nm_matakuliah'];
    $sks = $_POST['sks'];
    $semester = $_POST['semester'];
    $query = mysqli_query($koneksi, "update matakuliah set kd_matakuliah='$kd_matakuliah', nm_matakuliah='$nm_matakuliah', sks='$sks', semester='$semester' where kd_matakuliah='$kd_matakuliah'");

    if($query) {
        echo "<center>Berhasil update data ke database</center>";
        ?><center><a href="../../page/matakuliah/tabel.php">Lihat data di Tabel</a></center><?php
    } else {
        echo "<center>Gagal update data</center>";
        echo mysqli_error($koneksi);
    }
?>