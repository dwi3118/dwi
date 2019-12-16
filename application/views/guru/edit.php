<?php echo form_open('guru/update') ?>
<?php echo $judul ?>
<table width="325" border="1">
	<tr>
		<td>NIP</td>
		<td><input type="text" value="<?php echo $edit ['nip'] ?>"name="nip" id="nip"></td>
	</tr>

	<tr>
		<td>Nama</td>
		<td><input type="text" value="<?php echo $edit ['nama'] ?>"name="nama" id="nama"></td>
	</tr>

	<tr>
		<td>Email</td>
		<td><input type="text" value="<?php echo $edit ['email'] ?>"name="email" id="email"></td>
	</tr>

	<tr>
		<td>JK</td>
		<td><input type="radio" value="L" name="jk">pria</td>
		<td><input type="radio" value="P"name="jk">perempuan</td>
	</tr>
</table>