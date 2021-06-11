<?php 
    include "config/koneksi.php";

    $nip = $_GET['nip'];
    $query = mysqli_query($koneksi, "select * from dosen where nip='$nip'");
?>
<center>
<h1>Form Update Data Dosen</h1>
<form action="simpan_dosen.php" method="post">
    <table border="1">
        <?php
            while($row = mysqli_fetch_array($query)) {
        ?>
        
        <input type="hidden" name="nip" value="<?php echo $row['nip']; ?>"/>
        <tr>
                <td>NIP</td>
                <td><?php echo $row['nip'] ?></td>
        </tr>

        <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $row['nama'] ?>"></td>
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
            <td><textarea name="alamat" cols="20" rows="5"><?php echo $row['alamat']; ?></textarea></td>
        </tr>

        <tr>
            <td>Tempat Lahir</td>
            <td><input type="text" name="tempat_lahir" value="<?php echo $row['tempat_lahir']; ?>"/></td>
        </tr>

        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="text" name="tgl_lahir" value="<?php echo $row['tgl_lahir']; ?>"/></td>
        </tr>

        <tr>
            <td>No Handphone</td>
            <td><input type="text" name="no_hp" value="<?php echo $row['no_hp']; ?>"/></td>
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