<?php
    include "../../config/koneksi.php";
    $query = mysqli_query($koneksi, "select * from mahasiswa");
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
        <th>Aksi</th>
    </tr>

    <?php
        while($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td>
                    <?php echo $c = $c + 1; ?>
                </td>
                <td>
                    <?php echo $row['nim']; ?>
                </td>
                <td>
                    <?php echo $row['nama']; ?>
                </td>
                <td>
                    <?php echo $row['jns_kelamin']; ?>
                </td>
                <td>
                    <?php echo $row['alamat']; ?>
                </td>
                <td>
                    <?php echo $row['tempat_lahir']; ?>
                </td>
                <td>
                    <?php echo $row['tgl_lahir']; ?>
                </td>
                <td>
                    <a href="../../page/mahasiswa/delete.php?nim=<?php echo $row['nim']; ?>" onclick="return confirm('Apakah anda yakin menghapus?')">Delete</a>
                    <a href="../../page/mahasiswa/update.php?nim=<?php echo $row['nim']; ?>">Update</a>
                </td>
            </tr>
            <?php
        }
    ?>   
</table> <br>
<a href="../../page/mahasiswa/form.php">Input data form</a>
</center>