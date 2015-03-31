<?php 
	session_start();
	if (!isset($_SESSION['counter']))
	{
		$_SESSION['counter'] = 1;
	}
	else
	{
		$_SESSION['counter'] += 1;
	}
	// var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Counter</title>
	<style>
		h1, h2
		{
			text-align: center;
		}
		div 
		{
			border: 2px solid black;
			width: 3em;
			padding: 1em 1em;
			margin-left: auto;
			margin-right: auto;
		}
		input
		{
			margin-left: 48.5%;
			background-color: blue;
			color: white;
		}
	</style>
</head>
<body>
	<h1>You visited the site</h1>
	<div>
		<h2><?php echo $_SESSION['counter']; ?></h2>
	</div>
	<h2>times</h2>
	<form action="process.php" action='post'>
		<input type="submit" value='Reset'>
	</form>
</body>
</html>