<?php
    include "../../config/koneksi.php";

    $query = mysqli_query($koneksi, "select * from dosen");
    $jumlah = mysqli_num_rows($query);
    $c = 0;
    echo "<center>Jumlah data ada: ".$jumlah."</center>";
?>
<center>
<table border="1">
    <tr>
        <th>NO</th>
        <th>NIP</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>No Handphone</th>
        <th>Aksi</th>
    </tr>

    <?php
        while($row = mysqli_fetch_array($query)) {
    ?>

    <tr>
          <td><?php echo $c = $c + 1; ?></td>
          <td><?php echo $row['nip']; ?></td>   
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo $row['jns_kelamin']; ?></td>
          <td><?php echo $row['alamat']; ?></td>
          <td><?php echo $row['tempat_lahir']; ?></td>
          <td><?php echo $row['tgl_lahir']; ?></td>
          <td><?php echo $row['no_hp']; ?></td> 
          <td>
            <a href="../../page/dosen/delete.php?nip=<?php echo $row['nip']; ?>" onclick="return confirm('Apakah anda yakin menghapus?')">Delete</a>
            <a href="../../page/dosen/update.php?nip=<?php echo $row['nip'];  ?>">Update</a>
          </td>
          <?php
        }
        ?>
    </tr>
</table><br>
<a href="../../page/dosen/form.php">Input data form</a>
</center>