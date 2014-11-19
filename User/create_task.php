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

</head>
<body>
    
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
            <li class="name">
                <h1><a href="home.php">Parse Application</a></h1>
            </li>
            <li class="toggle-topbar menu-icon">
                <a href="javascript:;">
                    <span></span>
                </a>
            </li>
        </ul>

        <section class="top-bar-section">
            <ul class="right">
                <li class="active">
                    <a href="home.php">Home</a>
                </li>
                <li class="has-dropdown">
                    <a href="javascript:;">
                        Hi
                        <?php
                        $user = ParseUser::getCurrentUser();
                        $query = ParseUser::query();
                        $query->equalTo('email', $user);
                        $result = $query->find();

                        foreach($result as $row)
                        {
                            echo $row->name;
                        }
                        ?>
                    </a>
                    <ul class="dropdown">
                        <li>
                            <a href="logout.php">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
    </nav>

    <br>

    <div class="row">
        
        <?php if (isset($_GET['success'])) : ?>
            <div class="alert-box success radius"data-alert>Bingoo!! Add another..<a href="javascript:;" class="close">&times;</a></div>
        <?php elseif (isset($_GET['failed'])) : ?>
            <div class="alert-box danger radius"data-alert>Error!! Try to add another..<a href="javascript:;" class="close">&times;</a></div>
        <?php elseif (isset($_GET['empty'])) : ?>
            <div class="alert-box warning radius"data-alert>Please fill up all fields<a href="javascript:;" class="close">&times;</a></div>
        <?php endif; ?>

    </div>

    <div class="row">

		<div class="small-12 large-12 column">
			
            <fieldset>
                <legend>Create Task</legend>

                <form action="Action/Create_task.php" method="POST">
                    <label>
                        Name
                        <input type="text" name="name" placeholder="Task name">
                    </label>
                    <label>
                        Description
                        <input type="text" name="description" placeholder="Task description">
                    </label>
                    <input type="submit" value="Add" class="button">
                </form>
            </fieldset>

		</div>
    </div>

    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/foundation.min.js"></script>
    <script src="assets/js/vendor/modernizr.js"></script>
    <script>$(document).foundation();</script>
</body>
</html>