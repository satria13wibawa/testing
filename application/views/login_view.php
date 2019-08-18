<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <div class="row mt-4">
        <div class="col-md-6">
            <center>
                <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
                    <table>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="nama_user"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Login"></td>
                        </tr>
                    </table>
                </form>
            </center>
        </div>
    </div>
</body>

</html>