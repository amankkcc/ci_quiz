<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
		<title></title>
	</head>
	<body >
		<div class="container" >
			<div class="row ">
				<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 homeLeft">
					<div class="logo">
						<img id="sidebar-header-logo" src="<?php echo base_url(); ?>assets/img/logo.png">
					<label >SPORISM</label>
					</div>
					
					<div class="divLogin">
						<label class="textLogin">Log In</label>
					</div>
				</div>
				<div class="col homeRight">
					<div class="welcomeDiv">
						<div class="row">
							<label class="welcome">Welcome</label>
						</div>
						<div class="row">
							<label class="welcomeMsg">Login to access your account</label>
						</div>
						
						
					</div>
					<div class="row loginDiv">
						<form class="loginForm">
							<div class="form-group" >
								<label >Email Address</label>
								<input type="text"  class="form-control input-lg" name="" placeholder="Type your email address..">
							</div>
							<div class="form-group">
								<label >Password</label>
								<input type="text"  class="form-control input-lg" name="" placeholder="Type your password..">
							</div>
							<div class="remember" >
								<input   type="checkbox" name="remember">&nbsp<label >Remember me</label>
							</div>
							<div  >
								<input class="btnSubmit" type="submit" name="submit" value="SIGN IN">
							</div>
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</body>
</html>