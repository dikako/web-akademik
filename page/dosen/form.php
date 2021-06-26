<?php
    session_start();
    if(isset($_SESSION['username'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body id="form">

    <center>
        <h1>Form Input Data Dosen</h1>
        <form action="../../page/dosen/proses.php" method="POST">
            <table border="1">
                <tr>
                    <td>NIP</td>
                    <td><input type="text" name="nip" size="20"></td>
                </tr>

                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" size="20"></td>
                </tr>

                <tr>
                    <td>Jenis Kelamin</td>
                    <td><p>
                        <label>
                            <input type="radio" name="jns_kelamin" value="Laki-laki" id="jns_kelamin_0">
                            Laki-laki
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="jns_kelamin" value="Perempuan" id="jns_kelamin_1">
                            Perempuan
                        </label>
                        <br>
                    </p></td>
                </tr>

                <tr>
                    <td>Alamat</td>
                    <td><textarea name="alamat" cols="20" rows="5"></textarea></td>
                </tr>

                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempat_lahir" size="20"></td>
                </tr>

                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="text" name="tgl_lahir" size="20"></td>
                </tr>

                <tr>
                    <td>No Handphone</td>
                    <td><input type="text" name="no_hp" size="20"></td>
                </tr>

                <tr>
                    <td><input type="submit" name="proses" value="Proses"></td>
                    <td><input type="reset" value="Batal"></td>
                </tr>
            </table>
        </form>

        <a href="../../index.php">Home</a>
        <a href="../../page/admin/logout.php">Logout</a>
    </center>
</body>
</html>
<?php
    } else {
?>
<center>
    <h4>Anda Belum Login. Silahkan </h4>
    <a href="../../page/admin/form.php?page=1">Login</a>
</center>
<?php
    }
?>