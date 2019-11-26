<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>This is dashboard</h1>

	<?php 
	echo sys_get_temp_dir();

	?>
	<a href="<?php echo base_url(); ?>home/logout">Logout</a>
</body>
</html>