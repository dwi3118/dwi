<?php //echo anchor('guru/input','Tambah Baru');
?>

<table border="1">
	<tr>
		<td>NIP</td>
		<td>Nama</td>
		<td>Email</td>
		<td>JK</td>
		<td colspan="2" style="text-align: center">Aksi</td>
	</tr>

	<?php foreach ($tampil as $key => $value) { ?>
		<td><?php echo $value->nip ?></td>
		<td><?php echo $value->nama ?></td>
		<td><?php echo $value->email ?></td>
		<td><?php echo $value->jk ?></td>
<?php	} ?>
</table>