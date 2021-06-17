<?php 
    include "../../config/koneksi.php";

    $nip = $_GET['nip'];
    $query = mysqli_query($koneksi, "delete from dosen where nip='$nip'");
    if($query) {
        ?><script language="javascript">document.location.href="../../page/dosen/tabel.php";</script><?php
    } else {
        echo "Gagal hapus data";
    }
?>