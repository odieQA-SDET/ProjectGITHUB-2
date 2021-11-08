<div id="gallery">
<?php
if (isset($daftargambar)){
	foreach($daftargambar->result() as $row){
	echo "<div class=\"item\"><a href=\"".base_url()."galeri/".$row->gambar."\">
		<img src=\"".base_url()."thumbs/".$row->gambar."\" height=\"75\" width=\"100\" title=\"".$row->isi."\"></a>
		<div class=\"caption\">".$row->judul."</div>
		</div>";
	}
}
?>	
</div>