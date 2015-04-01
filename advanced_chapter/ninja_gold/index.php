<?php

	session_start();

	if (!isset($_SESSION['gold']))
	{
		$_SESSION['gold'] = 0;
	}
	if (!isset($_SESSION['activities']))
	{
		$_SESSION['activities'] = array();
	}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Make Money!!!</title>
	<style>
		body
		{
			font-family: sans-serif;
		}
		#gold h1
		{
			display: inline-block;
			margin-left: 2em;
		}
		#gold span
		{
			padding: .25em;
			border: 2px solid black;
		}
		#gold form
		{
			display: inline-block;
			padding-left: 55%;
		}
		.border
		{
			width: 15em;
			height: 13em;
			border: 2px solid black;
			text-align: center;
			padding: 0em 1em 1em 1em;
			display: inline-block;
			margin-top: 1em;
			margin-left: 2em;
		}
		#activity
		{
			margin-top: 2em;
			margin-left: 2em;
		}
		#activities
		{
			width: 74.5em;
			height: 12em;
			overflow: scroll;
			padding: .5em .5em;
			border: 2px solid black;
		}
		.fail
		{
			color: red;
		}
		.success
		{
			color: green;
		}
	</style>
</head>
<body>
	<div id='gold'>
		<h1>Your Gold:</h1>
		<h1><span><?= $_SESSION['gold'] ?></span></h1>
		<form action="process.php" method="post">
			<input type="hidden" name="restart" value="reset" />
			<input type="submit" value="Restart Game" />
		</form>
	</div>
	<div>
		<div class='border'>
			<h1>Farm</h1>
			<h2>(earns 10-20 gold)</h2>
			<form action="process.php" method="post">
				<input type="hidden" name="building" value="farm" />
				<input type="submit" value="Find Gold!" />
			</form>
		</div>
		<div class='border'>
			<h1>Cave</h1>
			<h2>(earns 5-10 gold)</h2>
			<form action="process.php" method="post">
				<input type="hidden" name="building" value="cave" />
				<input type="submit" value="Find Gold!" />
			</form>
		</div>
		<div class='border'>
			<h1>House</h1>
			<h2>(earns 2-5 gold)</h2>
			<form action="process.php" method="post">
				<input type="hidden" name="building" value="house" />
				<input type="submit" value="Find Gold!" />
			</form>
		</div>
		<!-- This div is so weird. I can't figure out why it's higher than the others -->
		<div class='border'>
			<h1>Casino!</h1>
			<h2>(earns/takes 0-50 gold)</h2>
			<form action="process.php" method="post">
				<input type="hidden" name="building" value="casino" />
				<input type="submit" value="Find Gold!" />
			</form>
		</div>
	</div>
	<div id='activity'>
		<h3>Activities:</h3>
		<div id='activities'>
			<?php
				foreach ($_SESSION['activities'] as $activity) 
				{
					echo  $activity;
				}
			?>
		</div>
	</div>
</body>
</html>