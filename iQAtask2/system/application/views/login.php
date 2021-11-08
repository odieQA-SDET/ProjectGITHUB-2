<html>
<head>
<title>Halaman Administrator</title>
<link href="<?php echo base_url() ?>css/login.css" media="screen,projection,print" rel="stylesheet" type="text/css" >

</head>
<body>
<center>
<h2> Login User </h2>
Login terlebih dahulu untuk bisa memanage sistem ini..
<div id="header">
  <div id="content">
		<h2>Login</h2>

<?php echo form_open('cadmin/usermasuk'); ?>
<table>
<tr><td>Username</td><td> : <?php echo form_input('username'); ?></td></tr>
<tr><td>Password</td><td> : <?php echo form_password('password'); ?></td></tr>
<tr><td colspan="2"><?php echo form_submit('submit', 'Login'); ?></td></tr>
</table>
<?php echo form_close(); ?>

  </div>
	<div id="footer">
		Copyright &copy; 2011 Agus Saputra
	</div>
</div>
</center>
</body>
</html>