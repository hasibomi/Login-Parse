<?php session_start(); if ( ! isset($_SESSION['email']) ) header('Location: index.php?auth_failed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home page | Login system PARSE</title>

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
			<h1>
				Hello <?php echo $_SESSION['email']; ?>
			</h1>
			<a href="logout.php">Logout</a>
		</div>
	</div>

	<!-- Script -->
	<script src="assets/js/vendor/jquery.js"></script>
	<script src="assets/js/foundation.min.js"></script>
	<script>$(document).foundation();</script>
</body>
</html>