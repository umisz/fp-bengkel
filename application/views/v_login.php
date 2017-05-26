<!DOCTYPE html>
<html>
<head>
	<title>Login BengkelQ</title>


	<link href="<?php echo base_url("asset/css/login1.css"); ?>" rel="stylesheet">
	<link href="<?php echo base_url("asset/vendor/bootstrap/css/bootstrap.css"); ?>" rel="stylesheet">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
</head>
<body>
	<div class="text-center" style="padding:50px 0">
	<div class="logo">login</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="login-form" class="text-left" action="<?php echo base_url('login/aksi_login'); ?>" method="post">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="lg_username" class="sr-only">Username</label>
						<input type="text" class="form-control" id="lg_username" name="username" placeholder="username">
					</div>
					<div class="form-group">
						<label for="lg_password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="lg_password" name="password" placeholder="password">
					</div>
				</div>
				<button type="submit" class="login-button" value="login"><i class="fa fa-chevron-right"></i></button>
			</div>
		</form>
	</div>
</div>
</body>
</html>