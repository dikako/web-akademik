<?php
    include "../../config/koneksi.php";

    $kode_kelas = $_POST['kode_kelas'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];
    $query = mysqli_query($koneksi, "update kelas set kode_kelas='$kode_kelas', jurusan='$jurusan', kelas='$kelas' where kode_kelas='$kode_kelas'");

    if($query) {
        echo "<center>Berhasil update data ke database</center>";
        ?><center><a href="../../page/kelas/tabel.php">Lihat data di Tabel</a></center><?php
    } else {
        echo "<center>Gagagl update data</center>";
        echo mysqli_error($koneksi);
    }
?>