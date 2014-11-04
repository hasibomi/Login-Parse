<?php
if ( empty($_POST['email']) || empty($_POST['password']) )
{
	header('Location: ../index.php?error=input_error');
}
require '../vendor/autoload.php';
 
use Parse\ParseClient;
 
ParseClient::initialize('H1AkucSxb1wAgm2MVeRRyICguegVakt5XicYzvdc', 'RlmmRI3YbTqEo3SJb2RBQEkrj3dvHypX63T8y4oL', '1iGm2dOwll70pc1rLQVbUOc5IiTEgz6LqfQZW97o');

use Parse\ParseObject;
use Parse\ParseUser;


$email 		= $_POST['email'];
$password	= md5($_POST['password']);

try
{
	$user = ParseUser::logIn($email, $password);
	$current = ParseUser::getCurrentUser();

	if ( $current )
	{
		session_start();
		$_SESSION['email'] = $email;
		header('Location: ../home.php');
	}
	else
	{
		echo "FAILED";
	}
}
catch ( ParseException $ex )
{
	header('Location: ../index.php?login_error='.$ex->getMessage());
}

?>