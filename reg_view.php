<!DOCTYPE html>
<html>

<head>
    <title>Tambah User</title>
</head>

<body>
    <center>
        <h3>Tambah User</h3>
        <?php echo validation_errors(); ?>
        <form action="<?php echo base_url() . 'registrasi/aksi'; ?>" method="post">
    </center>
    <table style="margin:20px auto;">
        <tr>
            <td>Nama User</td>
            <td><input type="text" name="nama_user"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Tambah"></td>
        </tr>
    </table>
    </form>
</body>

</html>