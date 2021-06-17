<?php 
    include "../../config/koneksi.php";

    $kode_kelas = $_GET['kode_kelas'];
    $query = mysqli_query($koneksi, "select * from kelas where kode_kelas='$kode_kelas'");
?>
<center>
<form action="../../page/kelas/simpan.php" method="post">
    <table border="1">
        <?php
            while($row = mysqli_fetch_array($query)) {
        ?>

        <input type="hidden" name="kode_kelas" value="<?php echo $row['kode_kelas']; ?>"/>
        <tr>
                <td>Kode Kelas</td>
                <td><?php echo $row['kode_kelas']; ?></td>
        </tr>

        <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan" value="<?php echo $row['jurusan']; ?>"/></td>
        </tr>

        <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas" value="<?php echo $row['kelas']; ?>"/></td>
        </tr>

        <tr>
                <td><input type="submit" value="Simpan" name="simpan"/></td>
        </tr>

        <?php
            }
        ?>
    </table>
</form>
</center>