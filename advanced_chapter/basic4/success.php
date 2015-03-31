<?php 

	session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SUCESS!!!!</title>
	<style>
		div
		{
			margin-left: auto;
			margin-right: auto;
			width: 40em;
			padding: .5em .5em;
			background-color: green;
			border: 2px solid black;
		}
	</style>
</head>
<body>
	<div>
		<h2>
<?php
	echo $_SESSION['success'];
?>
		</h2>
	</div>
</body>
</html>