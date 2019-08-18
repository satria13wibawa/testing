<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data</title>
</head>

<body>
    <center>
        <h3>Tambah data baru</h3>
        <?php echo validation_errors(); ?>
        <form action="<?php echo base_url() . 'barang_controller/aksi'; ?>" method="post">
    </center>
    <table style="margin:20px auto;">
        <tr>
            <td>Nama Barang</td>
            <td><input type="text" name="nama_barang"></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td><input type="text" name="jumlah"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Tambah"></td>
        </tr>
    </table>
    <center>
        <a class="nav-item nav-link" href="<?= base_url("barang_controller/index"); ?>">Kembali</a>
    </center>
    </form>
</body>

</html>