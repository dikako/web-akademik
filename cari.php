<?php
    include "config/koneksi.php";
    $point = $_POST['point'];
    $cari_mahasiswa = $_POST['cari_mahasiswa'];
    if($point == 'nim') {
        $query = mysqli_query($koneksi, "select * from mahasiswa where nim='".$cari_mahasiswa."'");
    } else if ($point == 'nama') {
        $query = mysqli_query($koneksi, "select * from mahasiswa where nama like '%".$cari_mahasiswa."%'");
    }

    $jumlah = mysqli_num_rows($query);
    $c = 0;
    echo "<center>Jumlah data ada: ".$jumlah."</center>";
?>

<center>
<table border="1">
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>No Handphone</th>
        </tr>

        <?php
            while($row = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $c= $c+1; ?></td>
                <td><?php echo $row['nim']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['jns_kelamin']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td><?php echo $row['tempat_lahir']; ?></td>
                <td><?php echo $row['tgl_lahir']; ?></td>
                <td><?php echo $row['no_hp']; ?></td>
            </tr>
        <?php
            }
        ?>
</table> 
<br>
<a href="index.php">Home</a>
</center>