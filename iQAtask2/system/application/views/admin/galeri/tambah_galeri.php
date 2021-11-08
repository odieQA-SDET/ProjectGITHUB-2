<?php echo form_open_multipart('cadmin/tambah_galeri'); ?>
<table>
<tr>
	<td class="td"> Judul </td>
	<td class="td"> : </td>
	<td> <?php echo form_input('judul'); ?> </td>
</tr>
<tr valign="top">
	<td class="td"> Isi </td>
	<td class="td"> : </td>
	<td> <?php echo form_input('isi'); ?> </td>
</tr>
<tr valign="top">
	<td class="td"> Gambar </td>
	<td class="td"> : </td>
	<td> <?php echo form_upload('userfile'); ?> </td>
</tr>
<tr>
	<td> <?php echo form_submit('upload', 'Upload', 'id="upload"'); ?> </td>
</tr>
</table>
<?php echo form_close(); ?>
