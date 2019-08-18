<!DOCTYPE html>
<html>

<head>
	<title>Testing CRUD</title>
</head>

<body>
	<center><?php echo ('Data Barang'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Jumlah</th>
		</tr>
		<?php
		$no = $this->uri->segment('3') + 1;
		foreach ($barang as $u) {
			?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama_barang ?></td>
			<td><?php echo $u->jumlah ?></td>
			<td>
				<?php echo anchor('barang_controller/barang_edit/' . $u->id, 'Edit'); ?>
			</td>
			<td>
				<?php echo anchor('barang_controller/barang_hapus/' . $u->id, 'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
	<center>
		<?php echo anchor('barang_controller/barang_input/', 'Tambah'); ?>
	</center>
	<center>
		<?php
		echo $this->pagination->create_links();
		?>
	</center>
	<center>
		<?php echo anchor('barang_controller/logout/', 'Logout'); ?>
	</center>
</body>

</html>