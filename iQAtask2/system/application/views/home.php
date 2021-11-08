<?php
foreach($ambil->result() as $row){
	$isi = $row->isi;
	$isi = substr($isi, 0, 200);
	echo "<a href='cartikel/view/$row->judul'><b> $row->judul </b> </a> <br>
		$isi <br><br>
	
	";
}
?>