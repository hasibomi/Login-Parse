<?php

require 'vendor/autoload.php';
 
use Parse\ParseClient;
 
ParseClient::initialize('H1AkucSxb1wAgm2MVeRRyICguegVakt5XicYzvdc', 'RlmmRI3YbTqEo3SJb2RBQEkrj3dvHypX63T8y4oL', '1iGm2dOwll70pc1rLQVbUOc5IiTEgz6LqfQZW97o');

use Parse\ParseObject;
 
$testObject = ParseObject::create("TestObject");
$testObject->set("foo", "bar");
$testObject->save();

?>