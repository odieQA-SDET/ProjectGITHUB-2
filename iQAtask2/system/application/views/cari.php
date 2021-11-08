<?php
if (empty($dapat)) {
	echo "<center> Data tidak ditemukan </center>";
}
else {

	foreach($dapat->result() as $row) :
	$isi = $row->isi;
	$isi = substr($isi, 0, 480);
?>
	<table>
	<tr>
		<td colspan="2"> <font size="3"><b><?php echo anchor('cartikel/view/'.$row->id, $row->judul); ?></b> </font>| <font size="2"><?php echo $row->tgl; ?></font></td>
	</tr>
	<tr valign="top">
		<td> <img src="<?php echo base_url();?>system/artikel/thumbnails/<?php echo $row->gambar;?>"/> </td>
		<td> <font size="2"><?php echo $isi; ?> ...</font></td>
	</tr>
	</table><hr>
	<?php 
	endforeach;
	?>
<?php
}
?>
<p>&nbsp;</p><br>