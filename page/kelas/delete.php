<?php
    include "../../config/koneksi.php";

    $kode_kelas = $_GET['kode_kelas'];
    $query = mysqli_query($koneksi, "delete from kelas where kode_kelas='$kode_kelas'");

    if($query) {
        ?><script language="javascript">document.location.href="../../page/kelas/tabel.php";</script><?php
    } else {
        echo "Gagal hapus data";
        echo mysqli_error($koneksi);
    }
?>