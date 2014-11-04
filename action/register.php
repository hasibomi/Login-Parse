<?php
if ( empty($_POST['email']) || empty($_POST['password']) || empty($_POST['confirm_password']) )
{
	header('Location:../register.php?error=input_error');
}

require '../vendor/autoload.php';

use Parse\ParseClient;
use Parse\ParseUser;
 
ParseClient::initialize('H1AkucSxb1wAgm2MVeRRyICguegVakt5XicYzvdc', 'RlmmRI3YbTqEo3SJb2RBQEkrj3dvHypX63T8y4oL', '1iGm2dOwll70pc1rLQVbUOc5IiTEgz6LqfQZW97o');

use Parse\ParseObject;

$email 		= $_POST['email'];
$password	= md5($_POST['password']);
$confirm	= md5($_POST['confirm_password']);

$user = new ParseUser();
$user->setUsername($email);
$user->setPassword($confirm);

try
{
	$user->signUp();
	header('Location:../index.php?success=register_success');
}
catch ( ParseException $ex )
{
	header('Location:../register.php?register_error='.$ex->getMessage());
}

?>