<?php
    include "../../config/koneksi.php";

    $kode_kelas = $_POST['kode_kelas'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];
    $query = mysqli_query($koneksi, "insert into kelas(kode_kelas, jurusan, kelas) values ('$kode_kelas', '$jurusan', '$kelas')");

    if($query) {
        echo "<center>Berhasil input data ke database</center>";
        ?> <center><a href="../../page/kelas/tabel.php">Lihat data di Tabel</a></center><?php
    } else {
        echo "Gagal input data";
        echo mysqli_error($koneksi);
    }
?>