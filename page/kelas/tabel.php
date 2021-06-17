<?php
    include "../../config/koneksi.php";

    $query = mysqli_query($koneksi, "select * from kelas");
    $jumlah = mysqli_num_rows($query);
    $c = 0;

    echo "<center>Jumlah data ada: ".$jumlah."</center";
?>
<center>
<table border="1">
    <tr>
        <th>NO</th>
        <th>Kode Kelas</th>
        <th>Jurusan</th>
        <th>Kelas</th>
        <th>Aksi</th>
    </tr>

    <?php
        while($row = mysqli_fetch_array($query)) {
    ?>

    <tr>
            <td><?php echo $c = $c+1; ?></td>
            <td><?php echo $row['kode_kelas']; ?></td>
            <td><?php echo $row['jurusan']; ?></td>
            <td><?php echo $row['kelas']; ?></td>
            <td>
                <a href="../../page/kelas/delete.php?kode_kelas=<?php echo $row['kode_kelas']; ?>" onclick="return confirm('Apakah anda yakin menghapus?')">Delete</a>
                <a href="../../page/kelas/update.php?kode_kelas=<?php echo $row['kode_kelas']; ?>">Update</a>
            </td>

            <?php
        }
        ?>
    </tr>
</table>
<br>

<a href="../../page/kelas/form.php">Input Data Form</a>
</center>