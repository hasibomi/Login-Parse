<?php
require 'vendor/autoload.php';

use Parse\ParseClient;
use Parse\ParseUser;

ParseClient::initialize('H1AkucSxb1wAgm2MVeRRyICguegVakt5XicYzvdc', 'RlmmRI3YbTqEo3SJb2RBQEkrj3dvHypX63T8y4oL', '1iGm2dOwll70pc1rLQVbUOc5IiTEgz6LqfQZW97o');

use Parse\ParseObject;
?>
<?php session_start(); if ( ! isset($_SESSION['email']) ) header('Location: index.php?auth_failed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home page | Login system PARSE</title>

    <!-- Stylesheets Foundation -->
    <link rel="stylesheet" href="assets/css/foundation.min.css">
    <link rel="stylesheet" href="assets/css/foundation-icons.css">
    <link rel="stylesheet" href="assets/css/normalize.css">

    <!-- Stylesheets Custom -->
    <link rel="stylesheet" href="assets/css/custom.css">