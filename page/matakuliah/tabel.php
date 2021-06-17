<?php
    include "../../config/koneksi.php";

    $query = mysqli_query($koneksi, "select * from matakuliah");
    $jumlah = mysqli_num_rows($query);
    $c = 0;
    echo "<center> Jumlah data ada: ".$jumlah."</center>";
?>

<center>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Kode Mata Kuliah</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Aksi</th>
        </tr>

        <?php
            while($row = mysqli_fetch_array($query)) {
        ?>

        <tr>
                <td><?php echo $c = $c+1; ?></td>
                <td><?php echo $row['kd_matakuliah'];?></td>
                <td><?php echo $row['nm_matakuliah'];?></td>
                <td><?php echo $row['sks'];?></td>
                <td><?php echo $row['semester'];?></td>
                <td>
                    <a href="../../page/matakuliah/delete.php?kd_matakuliah=<?php echo $row['kd_matakuliah']; ?>" onclick="return confirm('Apakah anda yakin menghapus?')">Delete</a>
                    <a href="../../page/matakuliah/update.php?kd_matakuliah=<?php echo $row['kd_matakuliah']; ?>">Update</a>
                </td>

                <?php
            }
                ?>
        </tr>
    </table>

    <a href="../../page/matakuliah/form.php">Input data form</a>
</center>