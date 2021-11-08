<?php echo form_open_multipart('cadmin/tambah_link'); ?>
<table>
<tr>
	<td class="td"> Judul </td>
	<td class="td"> : </td>
	<td> <?php echo form_input('judul'); ?> </td>
</tr>
<tr valign="top">
	<td class="td"> URL </td>
	<td class="td"> : </td>
	<td> <?php echo form_input('url'); ?> </td>
</tr>
<tr>
	<td class="td"> Gambar </td>
	<td class="td"> : </td>
	<td> <?php echo form_upload('userfile'); ?> </td>
</tr>
<tr>
	<td> <?php echo form_submit('submit', 'Submit', 'id="submit"'); ?> </td>
</tr>
</table>
<?php echo form_close(); ?>
