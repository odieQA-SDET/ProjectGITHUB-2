<html>
<head>
	<link href="<?php echo base_url() ?>css/menu_admin.css" media="screen,projection,print" rel="stylesheet" type="text/css" >
		<title>
			Halaman Administrator

		</title>
</head>
<body>
<table border="0" width="780" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td align="center"> 
		<?php
		$gambar = array(
			'src' => base_url().'images/admin.jpg',
			'alt' => 'Logo CI',
			'width' => '820',
			'height' => '200'
		);
		echo img($gambar);
		?>
</td>
	</tr>
</table>

<table align="center" width="820" cellpadding="0" cellspacing="0">
	<tr>
		<td width="170" bgcolor="#FFFFFF" valign="top">
		
<div id="menu">
<ul><li> <?php echo anchor('cadmin/home', 'Home'); ?> </li>
	<li> <?php echo anchor('cadmin/manajemen_artikel', 'Manajemen Artikel'); ?> </li>
	<li> <?php echo anchor('cadmin/manajemen_link', 'Manajemen Link'); ?> </li>
	<li> <?php echo anchor('cadmin/manajemen_iklan', 'Manajemen Iklan'); ?> </li>
	<li> <?php echo anchor('cadmin/manajemen_galeri', 'Manajemen Galeri'); ?> </li>
	<li> <?php echo anchor('cadmin/logout', 'Logout'); ?> </li>
</ul>
</div>

<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
	  </td>
	  <td width="20" bgcolor="#FFFFFF"></td>
	  <td width="640" bgcolor="#FFFFFF" valign="top">
		  <p>&nbsp;</p>

	<p align=justify> <?php include("menu.php"); ?> </p>
		<p>&nbsp;</p>
	  <p></td>
	  	  <td width="30" bgcolor="#FFFFFF">&nbsp;</td>

	</tr>
	<tr>
		<td colspan="4" align="center" bgcolor="#C0C0C0" height=50><font color="#333333" face=tahoma size=2>

<font color="#333333" face=tahoma size=2>
		
		Copyright &copy; 2010 <?php echo anchor('http://www.bukulokomedia.com', 'www.bukulokomedia.com'); ?>. All Right Reserved.</font></td>
	</tr>
</table>
</body>
</html>