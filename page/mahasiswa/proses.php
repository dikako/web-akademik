<?php 
    include "../../config/koneksi.php";
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jns_kelamin = $_POST['jns_kelamin'];
    $alamat = $_POST['alamat'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $no_hp = $_POST['no_hp'];
    $query = mysqli_query($koneksi, "insert into mahasiswa(nim, nama, jns_kelamin, alamat, tempat_lahir, tgl_lahir, no_hp) values('$nim', '$nama', '$jns_kelamin', '$alamat', '$tempat_lahir', '$tgl_lahir', '$no_hp')");
    if ($query) {
        echo "<center>Berhasil input data ke database</center>";
        ?> <center><a href="../../page/mahasiswa/tabel.php">Lihat data di Tabel</a></center> <?php
    } else {
        echo "Gagal input data";
        echo mysqli_error($koneksi);
    }
?>