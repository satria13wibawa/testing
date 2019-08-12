<!DOCTYPE html>
<html>

<head>
    <title>Testing</title>
</head>

<body>
    <center>
        <h3>Edit Data</h3>
        <?php echo validation_errors(); ?>
        <form action="<?php echo base_url() . 'barang_controller/update'; ?>" method="post">
    </center>
    <?php foreach ($barang as $u) { ?>
        <table style="margin:20px auto;">
            <tr>
                <td>Nama Barang</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $u->id ?>">
                    <input type="text" name="nama_barang" value="<?php echo $u->nama_barang ?>">
                </td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="text" name="jumlah" value="<?php echo $u->jumlah ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
        </form>
    <?php } ?>
</body>

</html>