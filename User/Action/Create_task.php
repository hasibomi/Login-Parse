<?php
require '../vendor/autoload.php';

use Parse\ParseClient;
use Parse\ParseUser;
use Parse\ParseObject;

ParseClient::initialize('H1AkucSxb1wAgm2MVeRRyICguegVakt5XicYzvdc', 'RlmmRI3YbTqEo3SJb2RBQEkrj3dvHypX63T8y4oL', '1iGm2dOwll70pc1rLQVbUOc5IiTEgz6LqfQZW97o');

if ( empty($_POST['name']) || empty($_POST['description']) )
{
	header('Location: ../create_task.php?empty');
}
else
{
	$task = new ParseObject('Task');

	$task->set('name', $_POST['name']);
	$task->set('description', $_POST['description']);

	try
	{
		$task->save();
		header('Location: ../create_task.php?success');
	}
	catch (ParseException $ex)
	{
		header('Location: ../create_task.php?failed');
	}
}

?>