<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width", initial-scale="1">
	<title>Register | Login using PARSE</title>

	<!-- Stylesheets Foundation -->
	<link rel="stylesheet" href="assets/css/foundation.min.css">
	<link rel="stylesheet" href="assets/css/normalize.css">

	<!-- Stylesheets Custom -->
	<link rel="stylesheet" href="assets/css/custom.css">

	<!-- Script Foundation -->
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
			if ( isset($_GET['register_error']) )
			{
				?>
				<div class="alert-box danger radius" data-alert>
					<?php echo $_GET['register_error']; ?>
					<a href="javascript:;" class="close">&times;</a>
				</div>
				<?php
			}
			?>
			<fieldset>
				<legend>Register an account</legend>
				<form action="action/register.php" method="post">
					<label>Email
						<input type="email" name="email" id="">
					</label>
					<label>
						Password
						<input type="password" name="password" id="">
					</label>
					<label>
						Confirm Password
						<input type="password" name="confirm_password" id="">
					</label>
					<input type="submit" value="Register" class="button">
				</form>
				<p>
					<em>Or </em> <a href="index.php">Login to an existing account</a>
				</p>
			</fieldset>
		</div>
	</div>

	<!-- Script -->
	<script src="assets/js/vendor/jquery.js"></script>
	<script src="assets/js/foundation.min.js"></script>
	<script>$(document).foundation();</script>
</body>
</html>