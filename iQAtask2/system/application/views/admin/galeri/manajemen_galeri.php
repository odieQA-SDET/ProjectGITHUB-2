<h3> <?php echo anchor('cadmin/tambah_galeri', 'Tambah Galeri'); ?> </h3>
<table width=100% style="border: 1px dashed">
<tr bgcolor=#999999>
	<th width="10" class="td"> No </th>
	<th class="td"> Judul </th>
	<th class="td"> Isi </th>
	<th class="td" colspan="2"> Aksi </th>
</tr>
<?php
$i = 1;
foreach($hasil->result() as $row) :
?>

<tr>
	<td class="td" style="border: 1px dotted"> <?php echo $i; ?> </td>
	<td class="td" style="border: 1px dotted"> <?php echo $row->judul; ?> </td>
	<td class="td" style="border: 1px dotted"> <?php echo $row->isi; ?> </td>
	<td class="td" style="border: 1px dotted"> <?php echo anchor('cadmin/edit_galeri/'.$row->id, 'Edit'); ?> </td>
	<td class="td" style="border: 1px dotted"> <?php echo anchor('cadmin/delete_galeri/'.$row->id, 'Hapus'); ?> </td>
</tr>
<?php 
$i++;
endforeach;

?>
</table>
<?php
echo $this->pagination->create_links();
?>