<?php
    include "config/koneksi.php";

    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $jns_kelamin = $_POST['jns_kelamin'];
    $alamat = $_POST['alamat'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $no_hp = $_POST['no_hp'];

    $query = mysqli_query($koneksi, "update dosen set nip='$nip', nama='$nama', jns_kelamin='$jns_kelamin', alamat='$alamat', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', no_hp='$no_hp'");
    if($query) {
        echo "<center>Berhasil update data ke database</center>";
        ?><center><a href="tabel_dosen.php">Lihat data di tabel</a></center><?php
    } else {
        echo "Gagal update data";
        echo mysqli_error($koneksi);
    }
?>