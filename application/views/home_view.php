<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
		<title></title>
	</head>
	<body class="body">
		<div class="container" >
			<form action="index.php" method="post">
				<label style="position: center; color:red"></label>
				<input type="email" name="email" class="input1"placeholder="enter your email" style="color: white;" ><br>
				<input type="Password" name="password" class="input2" placeholder="enter Password" style="color: white;" ><br>
				
				<input type="submit" name="submit" value="Login" class="btn1" style="color: white;">
				<a href="<?php echo base_url(); ?>signup"><span >Signup</span></a><br><br>
				<a href="<?php echo base_url(); ?>home/forget" class="anchor" ><span style="color: green;"> Forgot password ?</span>  </a>
			</form>
			
		</div>
	</body>
</html>