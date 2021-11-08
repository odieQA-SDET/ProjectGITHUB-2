<html>
<head>
	<title> Tambah Artikel </title>
	<?php echo $xinha_java; ?>
</head>
<body>
<?php echo form_open_multipart('cadmin/tambah_artikel'); ?>

<table>
<tr>
	<td class="td"> Nama </td>
	<td class="td"> : </td>
	<td> <?php echo form_input('judul'); ?> </td>
</tr>
<tr valign="top">
	<td class="td"> Isi </td>
	<td class="td"> : </td>
	<td> 
		<?php
		$textarea = array(
			'name' => 'isi',
			'id' => 'isi',
			'cols' => '65',
			'rows' => '20',
		);
		echo form_textarea($textarea);
		?>
 </td>
</tr>
<tr>
	<td class="td"> Gambar </td>
	<td class="td"> : </td>
	<td><?php echo form_upload('userfile'); ?> </td>
</tr>
<tr>
	<td> <?php echo form_submit('submit', 'Submit', 'id="submit"'); ?> </td>
</tr>
</table>
<?php echo form_close(); ?>
</body>
</html>