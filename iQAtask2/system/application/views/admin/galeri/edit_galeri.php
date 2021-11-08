<?php echo form_open_multipart('cadmin/edit_galeri/'.$hasil->id); ?>
<table>
<tr>
	<td class="td"> Judul </td>
	<td class="td"> : </td>
	<td> <?php echo form_input('judul', $hasil->judul); ?> </td>
</tr>
<tr valign="top">
	<td class="td"> Isi </td>
	<td class="td"> : </td>
	<td> <?php echo form_input('isi', $hasil->isi); ?> </td>
</tr>
<tr valign="top">
	<td class="td"> Gambar Awal </td>
	<td class="td"> : </td>
	<td> <?php echo "<img src=\"".base_url()."thumbs/".$hasil->gambar."\">"; ?> </td>
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
