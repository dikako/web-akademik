<?php
    include "../../config/koneksi.php";

    $kd_matakuliah = $_GET['kd_matakuliah'];
    $query = mysqli_query($koneksi, "select * from matakuliah where kd_matakuliah='$kd_matakuliah'");
?>

<center>
    <form action="../../page/matakuliah/simpan.php" method="post">
        <table border="1">
            <?php
                while($row = mysqli_fetch_array($query)) {
            ?>

            <input type="hidden" name="kd_matakuliah" value="<?php echo $row['kd_matakuliah']; ?>"/>
            <tr>
                    <td>Kode Mata Kuliah</td>
                    <td><?php echo $row['kd_matakuliah']; ?></td>
            </tr>

            <tr>
                    <td>Nama Mata Kuliah</td>
                    <td><input type="text" name="nm_matakuliah" value="<?php echo $row['nm_matakuliah']; ?>"></td>
            </tr>

            <tr>
                    <td>SKS</td>
                    <td><input type="text" name="sks" value="<?php echo $row['sks']; ?>"></td>
            </tr>

            <tr>
                    <td>Semester</td>
                    <td><input type="text" name="semester" value="<?php echo $row['semester']; ?>"></td>
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