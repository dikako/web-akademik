<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Kelas</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body id="form">
    <center>
        <h2>Form Input Data Kelas</h2>
        <form action="../../page/kelas/proses.php" method="post">
            <table border="1">
                <tr>
                    <td>Kode Kelas</td>
                    <td><input type="text" name="kode_kelas" size="30"></td>
                </tr>

                <tr>
                    <td>Jurusan</td>
                    <td><input type="text" name="jurusan" size="30"></td>
                </tr>

                <tr>
                    <td>Kelas</td>
                    <td><input type="text" name="kelas" size="30"></td>
                </tr>

                <tr>
                    <td><input type="submit" name="proses" value="Proses"></td>
                    <td><input type="reset" value="Batal"></td>
                </tr>
            </table>
        </form>

        <a href="../../index.php">Home</a>
    </center>
    
</body>
</html>