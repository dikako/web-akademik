<?php
    include "../../config/koneksi.php";

    $kd_matakuliah = $_GET['kd_matakuliah'];
    $query = mysqli_query($koneksi, "delete from matakuliah where kd_matakuliah='$kd_matakuliah'");

    if($query) {
        ?><script language="javascript">document.location.href="../../page/matakuliah/tabel.php"</script><?php
    } else {
        echo "Gagal hapus data";
    }
?>