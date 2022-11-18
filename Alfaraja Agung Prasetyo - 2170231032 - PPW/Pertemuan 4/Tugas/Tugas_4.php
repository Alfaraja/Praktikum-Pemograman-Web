<!DOCTYPE html>
<html>
    <head>
        <title>Form Login</title>
    </head>
    <body>
        <br>
        <br>
        <form method="POST" action="Tampilantugas_4.php">
            <table width="400" align="center" cellpadding="2" cellspacing="2">
                <tr>
                    <td width="130">Username</td>
                    <td><input type="text" name="nama_panggilan"></td>
                </tr>
                <tr>
                    <td width="130">Password</td>
                    <td><input type="password" name="nama_lengkap"></td>
                </tr>
                <tr>
                    <td width="130">Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="btnLogin" value="Login">
                        <input type="reset" name="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
