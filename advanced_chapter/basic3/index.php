<?php

	session_start();

	if (!isset($_SESSION['rando']))
	{
		$_SESSION['rando'] = rand(1, 100);
	}
	if (!isset($_SESSION['response']))
	{
		$_SESSION['response'] = '';
	}

	// var_dump($_SESSION['rando']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Great Number Game</title>
	<style>
		*
		{
			font-family: sans-serif;
		}
		h1, h3
		{
			text-align: center;
		}
	<?php
		if ($_SESSION['response'] == 'Too high!' || $_SESSION['response'] == 'Too low!')
		{
			echo '#color
			{
				margin-left: auto;
				margin-right: auto;
				width: 20em;
				height: 15em;
				background-color: red;
				margin-bottom: 1em;
			}
			#color h2
			{
				text-align: center;
				padding-top: 4em;
				color: white;
			}';
		}
		else if ($_SESSION['response'] != '')
		{
			echo '#color
			{
				margin-left: auto;
				margin-right: auto;
				width: 20em;
				height: 15em;
				background-color: green;
			}
			#color h2
			{
				text-align: center;
				padding-top: 4em;
				color: white;
				padding-bottom: 1em;
			}
			#color form
			{
				margin-left: 36%;
			}';
		}	
	?>
		#color
		{
			display: hidden;
		}
		form
		{
			text-align: center;
			width: 10em;
			margin-left: 45.8%;
		}
		form input
		{
			display: block;
			margin-bottom: 1em;
		}
	</style>
</head>
<body>
	<h1>Welcome to the Great Number Game!</h1>
	<h3>I am thinking of a number between 1 and 100</h3>
	<h3>Take a guess!</h3>

	<?php
		if ($_SESSION['response'] == 'Too high!' || $_SESSION['response'] == 'Too low!' || $_SESSION['response'] == '')
		{
			echo '<div id="color"><h2>' . $_SESSION['response'] . '</h2></div>';
			echo 	'<form action="process.php" method="post">
					<input type="text" name="guess">
					<input type="submit" value="Submit">
					</form>';			
		}
		else if ($_SESSION['response'] != '')
		{	
			echo 	'<div id="color">
						<h2>' . $_SESSION['response'] . '</h2>
						<form action="process.php" method="post">
							<input type="hidden" name="again" value="play">
							<input type="submit" value="Play again!"></input>
						</form>
					</div>';
		}
	?>

</body>
</html>