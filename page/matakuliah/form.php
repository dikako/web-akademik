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
        <h2>Form Input Data Mata Kuliah</h2>
        <form action="../../page/matakuliah/proses.php" method="post">
            <table border="1">
                <tr>
                    <td>Kode Mata Kuliah</td>
                    <td><input type="text" name="kd_matakuliah" size="30"></td>
                </tr>

                <tr>
                    <td>Nama Mata Kuliah</td>
                    <td><input type="text" name="nm_matakuliah" size="30"></td>
                </tr>

                <tr>
                    <td>SKS</td>
                    <td><input type="text" name="sks" size="30"></td>
                </tr>

                <tr>
                    <td>Semester</td>
                    <td><input type="text" name="semester" size="30"></td>
                </tr>

                <tr>
                    <td><input type="submit" name="proses" value="Proses"></td>
                    <td><input type="reset" value="Batal"></td>
                </tr>
            </table>
        </form>
        <a href="index.php">Home</a>
    </center>
</body>
</html>