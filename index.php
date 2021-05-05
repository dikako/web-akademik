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
                        <a href="form.php">Mahasiswa</a>
                    </td>

                    <td>
                        <a href="form_dosen.php">Dosen</a>
                    </td>

                    <td>
                        <a href="form_kelas.php">Kelas</a>
                    </td>

                    <td>
                        <a href="form_matakuliah">Mata Kuliah</a>
                    </td>

                    <td>
                        <?php
                            session_start();
                            if (isset($_SESSION['LOGIN'])) {
                                ?>
                                <a href="logout.php">Logout</a>
                                <?php
                            } else {
                                ?>
                                <a href="admin/form_admin.php?page=1">Login</a>
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
                    <option value="judul">NIM</option>
                    <option value="pengarang">Nama</option>
                </select>

                <input type="text" name="cari_mahasiswa" value=""/>
                <input type="submit" name="button" value="cari">
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