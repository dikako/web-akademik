<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login Admin</title>
</head>
<body id="form">
    <center>
        <h2>Form Login Admin</h2>

        <form action="../../page/admin/login.php" method="post">
            <table>
                <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" name="username" size="30">
                    </td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td>
                        <input type="password" name="password" size="30">
                    </td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <input type="submit" name="Login" value="Login">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>