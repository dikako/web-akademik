<?php
    include "../../config/koneksi.php";
    $nim = $_GET['nim'];
    $query = mysqli_query($koneksi, "select * from mahasiswa where nim='$nim'");
?>
<center>

<h1>Form Update Data Mahasiswa</h1>
<br>
<form action="../../page/mahasiswa/simpan.php" method="post">
    <table border="1">
        <?php
            while($row = mysqli_fetch_array($query)) {
        ?>
        <input type="hidden" name="nim" value="<?php echo $nim; ?>"/>
        <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" value="<?php echo $row['nim']; ?>"></td>
        </tr>

        <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $row['nama']; ?>"></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
                <td><p>
                    <label>
                        <input type="radio" name="jns_kelamin" value="Laki-laki" <?php if($row['jns_kelamin'] == "Laki-laki") {
                            echo "checked";}; ?> id="jns_kelamin_0"> Laki-laki
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="jns_kelamin" value="Perempuan" <?php if($row['jns_kelamin'] == "Perempuan") {
                            echo "checked";}; ?> id="jns_kelamin_1"> Perempuan
                    </label>
                    <br>
                </p></td>
        </tr>

        <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" rows="5" cols="20">
                    <?php echo $row['alamat'] ?>
                </textarea></td>
        </tr>

        <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tempat_lahir" value="<?php echo $row['tempat_lahir']; ?>"></td>
        </tr>

        <tr>
                <td>Tanggal Lahir</td>
                <td><input type="text" name="tgl_lahir" value="<?php echo $row['tgl_lahir']; ?>"></td>
        </tr>

        <tr>
                <td>No Handphone</td>
                <td><input type="text" name="no_hp" value="<?php echo $row['no_hp'] ?>"></td>
        </tr>

        <tr>
                <td><input type="submit" value="Simpan" name="simpan"></td>
        </tr>

        <?php
            }
        ?>
    </table>
</form>
</center>