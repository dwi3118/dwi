<?php echo form_open('guru/save') ?>
<?php echo $judul ?>
<table width="325" border="1">
	<tr>
		<td>NIP</td>
		<td><input type="text" name="nip" id="nip"></td>
	</tr>

	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" id="nama"></td>
	</tr>

	<tr>
		<td>Email</td>
		<td><input type="text" name="email" id="email"></td>
	</tr>

	<tr>
		<td>JK</td>
		<td><input type="radio" name="jk" value="L">pria
			<input type="radio" name="jk" value="P">perempuan</td>
	</tr>
</table>