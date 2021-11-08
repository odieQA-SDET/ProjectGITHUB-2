<?php echo form_open_multipart('cadmin/tambah_iklan'); ?>
<table>
<tr>
	<td class="td"> URL </td>
	<td class="td"> : </td>
	<td> <?php echo form_input('url'); ?> <font size=1>tanpa http://</font></td>
</tr>
<tr valign="top">
	<td class="td"> Gambar </td>
	<td class="td"> : </td>
	<td> <?php echo form_upload('userfile'); ?> <br><font size=1>Size 460 x 60 px</font> </td>
</tr>
<tr>
	<td> <?php echo form_submit('submit', 'Submit', 'id="submit"'); ?> </td>
</tr>
</table>
<?php echo form_close(); ?>