<!DOCTYPE html>
<html>
	<head>
		<meta name="description" content="">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width user-scalable = yes" />
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<title>Joe's Mobile Pint Tally</title>
	</head>

	<?php 
		// Warn user if config.php isn't set, or include it if it does
		if (file_exists('config.php')!=1) {
			echo '<div class="error">Warning, the configuration file is missing! Make sure you have saved a copy of config-sample.php as config.php and filled in the information for database login.</div>';
		}
		else {
			require('config.php'); 
		}

		// Check database connection
		$db_link = mysqli_connect($db_server, $db_username, $db_password);

		if (!$db_link) {
		  die('Failed to connect to MySQL: ' . mysqli_connect_error());
		}
		else {
			mysql_close($db_link);
		}
	?>

<body>
<header>
	<h1 class="bigtext"><span>Joe's Pint Tally</span></h1>

	<ul id="nav">
		<li class="40"><a href="index.php"><i class="fa fa-beer fa-2x"></i></a></li>
		<li class="60"><a href="evaluate.php"><i class="fa fa-bar-chart-o fa-2x"></i></a></li>
	</ul>
</header>
<main>

