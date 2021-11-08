<html>
<head>
	<title>Welcome to My Blog | Agus Saputra</title>
	<link href="<?php echo base_url() ?>css/style.css" media="screen,projection,print" rel="stylesheet" type="text/css" >
	<link href="<?php echo base_url() ?>css/gallery.css" media="screen,projection,print" rel="stylesheet" type="text/css" >
	
	<script type="text/javascript" src="<?php echo base_url() ?>js/jquery.js"></script>
	<?php switch($jenis){
		case "Galeri";
			echo "<script type=\"text/javascript\" src=\"".base_url()."js/gallery.js\"></script> ";
			break;
		}
?>
</head>

<body>
<div id="head" class="clearfloat">
	<div class="clearfloat">
		<div id="logo" class="left"> <a href="http://www.work.baleho.com/"> <img src="<?php echo base_url();?>css/images/logo.png" width="177" height="39" alt="" /> Publisher</a>
		<div id="tagline"><b>Solusi Cerdas Buku Berkualitas</b></div>
		</div>
		<div class="right">
			<?php foreach($daftariklan->result() as $row): ?>
        	<a href="http://<?php echo $row->url; ?>"><img src="<?php echo base_url();?>/system/iklan/<?php echo $row->gambar;?>" alt="" width="468" height="60"></a>
        	<?php endforeach; ?>
		
		</div>
	</div>
	<div id="navbar" class="clearfloat">
		<ul id="page-bar" class="left clearfloat">
			<li> <?php echo anchor('../', 'Home'); ?> </li>
    		<li> <?php echo anchor('cprofil', 'Profil'); ?> </li>
    		<li> <?php echo anchor('ckontak', 'Kontak'); ?></li>
      		<li> <?php echo anchor('cartikel', 'Daftar Artikel'); ?> </li>
      		<li> <?php echo anchor('cgaleri', 'Galeri'); ?> </li>
			<li> <?php echo anchor('ckomentar', 'Komentar'); ?> </li>
		</ul>
		<div id="searchform">
			<?php echo form_open('cblog/cari'); ?>
    		<?php echo form_input('search'); ?>
    		<?php echo form_submit(array('name' => 'cari', 'value' => 'GO', 'class' => 'button')); ?>
    		<?php echo form_close(); ?>
		
		</div>
	</div>
</div>
<div id="page" class="clearfloat">
	<div id="top" class="clearfloat">
		<div id="headline"> <p> <?php include "menu.php"; ?> </p> </div>
		<div id="featured">
    		<h3>Artikel Terbaru</h3>
    		
				<?php foreach($daftarartikel->result() as $row): ?>
    			<table><tr valign="top"><td>&bull; </td><td><font size=2><?php echo anchor('cartikel/view/'.$row->id, $row->judul); ?>
    			</font></td></tr></table>
    			<?php endforeach; ?>
    	  	
    	</div>
		<div id="sidebar">
      		<div id="sidebar-top">
        		<h3>Quick Link</h3>
        		<?php foreach($daftarlink->result() as $row): ?>
        		<img src="<?php echo base_url();?>/system/link/<?php echo $row->gambar;?>"><br>
        		<a href="http://<?php echo $row->url; ?>"><font size="2"> <?php echo $row->judul; ?></font></a><br><br>
        		<?php endforeach; ?>
      		</div>
      	</div>
    </div>
</div>
<div id="front-popular" class="clearfloat">
Copyright &copy; 2011 Agus Saputra <br> 
Jl. Pegadaian No. 38 Arjawinangun - Cirebon <br>
Alamat Skr : Jl. Perintis No. 18 RT/RW 03/05 Mega Kuningan - Jakarta Selatan<br>
Ph. 08562121141, Email: takehikoboyz@gmail.com <br>
Web : http://www.agussaputra.com
</div>
<div id="footer">
</div>
</body>
</html>
