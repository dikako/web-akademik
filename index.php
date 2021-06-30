<?php
    session_start();
    if (isset($_SESSION['username'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="assets/style.css" rel="stylesheet" href="text/css">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <center>
                <h1>SISTEM INFORMASI AKADEMIK</h1>
                <H3>STMIK INDO DAYA SUVANA</H3>
            </center>
        </div>

        <div id="menubar">
            <table>
                <tr>
                    <td>
                        <a href="index.php">Home</a>
                    </td>

                    <td>
                        <a href="page/mahasiswa/form.php">Mahasiswa</a>
                    </td>

                    <td>
                        <a href="page/dosen/form.php">Dosen</a>
                    </td>

                    <td>
                        <a href="page/kelas/form.php">Kelas</a>
                    </td>

                    <td>
                        <a href="page/matakuliah/form.php">Mata Kuliah</a>
                    </td>

                    <td>
                        <?php
                            session_start();
                            if (isset($_SESSION['username'])) {
                                ?>
                                <a href="page/admin/logout.php">Logout</a>
                                <?php
                            } else {
                                ?>
                                <a href="page/admin/form.php?page=1">Login</a>
                                <?php
                            }
                            ?>
                    </td>

                    <td>
                        &nbsp;
                    </td>
                </tr>
            </table>
        </div>

        <div id="body">
            <h1>SELAMAT DATANG!</h1>
            <p>Selamat berkunjung di Sistem Informasi Akademik STMIK INDO DAYA SUVANA</p>
        </div>

        <div id="sidebar">
            <form id="cari" name="cari" method="POST" action="cari.php">
                <h2>Cari Data Mahasiswa</h2>
                <select name="point">
                    <option value="nim">NIM</option>
                    <option value="nama">Nama</option>
                </select>

                <input type="text" name="cari_mahasiswa" value=""/>
                <input type="submit" name="button" value="Cari">
            </form>
        </div>

        <div id="footer">
            <center>
                <h3>Hubungi kami <b>https://ids.ac.id</b></h3>
            </center>
        </div>
    </div>   
</body>
</html>
<?php
    } else {
        header("location:../akademik/page/admin/form.php");
    }
?>