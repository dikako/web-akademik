<?php 
    include "config/koneksi.php";
    $nim = $_GET['nim'];
    $query = mysqli_query($koneksi, "delete from mahasiswa where nim='$nim'");
    if ($query) {
        ?> <script language="javascript">document.location.href="tabel.php"</script> <?php
    } else {
        echo "gagal hapus data";
    }
?>