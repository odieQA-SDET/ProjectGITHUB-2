<table border="0" width="600" align="center">
<?php
foreach($dafkomen->result() as $row){
?>
<tr>
	<td> <font size="2"><b><a href="http://<?php echo $row->url; ?>" target="_blank"> <?php echo $row->nama; ?> </a></b> | <?php echo $row->tgl; ?> <br>
	<?php echo $row->komentar; ?> <hr>
	<?php } ?> </font></td>
</tr>
</table>
<?php echo $page;?>
<?php echo form_open('ckomentar/komentar');?>
<table border="0" width="600" align="center">
	<tr>
		<td colspan="2"><h3>KIRIM KOMENTAR</h3></td>
	<tr>
	<tr valign="top">
		<td> <font size="2">Nama </font></td>
		<td> <input name="nama" type="text" value="<?php echo set_value('nama'); ?>">
		<?php echo form_error('nama'); ?></td>
	</tr> 
	<tr valign="top">
		<td><font size="2">Alamat Email</font></td>
		<td> <input name="email" type="text" value="<?php echo set_value('email'); ?>">
		<?php echo form_error('email'); ?></td>
	</tr>
	<tr valign="top">
		<td><font size="2">Komentar</font></td>
		<td><textarea type="text" cols="40" rows="6" name="komentar" value="<?php echo set_value('komentar'); ?>" /></textarea>
		<?php echo form_error('komentar'); ?></td>
	</tr>
	<tr>
		<td><font size="2">Gambar Kode</font></td>
		<td><span id="captchaImage"><?php echo $captcha['image']; ?></span>
		<?php echo $kesalahan; ?></td>
	</tr>
	<tr>
		<td><font size="2">Masukkan kode</font></td>
		<td><input name="confirmCaptcha" id="confirmCaptcha" type="text" value=""></td>
	</tr>
	<tr>
		<td><?php echo form_submit("kirim","Kirim Data");?></td>
	</tr>
</table>	
<?php echo form_close();?>
</form>