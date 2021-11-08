<html>
<head>
	<title> Tambah Artikel </title>
	<?php echo $xinha_java; ?>
</head>
<body>
<h3> Tambah Data </h3>
<?php echo form_open_multipart('cadmin/edit_manajemen_artikel/'.$hasil->id); ?>

<table>
<tr>
	<td class="td"> Nama </td>
	<td class="td"> : </td>
	<td> <?php echo form_input('judul', $hasil->judul); ?> </td>
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
			'value' => $hasil->isi
		);
		echo form_textarea($textarea);
		?>
 </td>
</tr>
<tr>
	<td class="td"> Gambar Awal </td>
	<td class="td"> : </td>
	<td> <img src="<?php echo base_url();?>system/artikel/thumbnails/<?php echo $hasil->gambar;?>"/> </td>
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