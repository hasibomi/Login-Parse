<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width", initial-scale="1">
	<title>Login using PARSE</title>
	<link rel="stylesheet" href="assets/css/foundation.min.css">
	<link rel="stylesheet" href="assets/css/normalize.css">
	<link rel="stylesheet" href="assets/css/custom.css">
	<script src="assets/js/vendor/modernizr.js"></script>
</head>
<body>
	
	<div class="row">
		<div class="small-12 large-12 column">
			<?php
			if ( isset($_GET['error']) && $_GET['error'] == 'input_error' )
			{
				?>
				<div class="alert-box warning radius" data-alert>
					Please fill up the form correctly
					<a href="javascript:;" class="close">&times;</a>
				</div>
				<?php
			}
			?>
			<?php
			if ( isset($_GET['success']) && $_GET['success'] == 'register_success' )
			{
				?>

				<div class="alert-box success radius" data-alert>
					Registration successfull. Please login using login form below.
					<a href="#" class="close">&times;</a>
				</div>

				<?php
			}
			?>
			<?php
			if ( isset($_GET['auth_failed']) )
			{
				?>

				<div class="alert-box warning radius" data-alert>
					You are not loged in!! Please login using login form below.
					<a href="#" class="close">&times;</a>
				</div>

				<?php
			}
			?>
			<?php
			if ( isset($_GET['credential_error']) )
			{
				?>

				<div class="alert-box danger radius" data-alert>
					Wrong Email/Password.
					<a href="#" class="close">&times;</a>
				</div>

				<?php
			}
			?>
			<form action="action/login.php" method="post">
				<fieldset>
					<legend>Login Form</legend>
					<label>
						Email
						<input type="email" name="email" id="">
					</label>
					<label>
						Password
						<input type="password" name="password" id="">
					</label>
					<input type="submit" value="Login" class="button">
					<p>
						<i>or</i>
					</p>
					<p>
						<i>
							<a href="register.php">create an account</a>
						</i>
					</p>
				</fieldset>
			</form>
		</div>
	</div>

	<script src="assets/js/vendor/jquery.js"></script>
	<script src="assets/js/foundation.min.js"></script>
	<script> $(document).foundation(); </script>
</body>
</html>