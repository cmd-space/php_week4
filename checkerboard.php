<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Checkerboard</title>
	<style rel='stylesheet' type='text/css'>
		.checker
		{
			width: 50px;
			height: 50px;
			display: inline-block;
			/* for some reason a 0px margin wasn't bringing the board together like it should have, so I went with a negative margin*/
			margin: -2px;
			padding: 0px;
		}
		.red
		{
			background-color: red;
		}
		.black
		{
			background-color: black;
		}
	</style>
</head>
<body>
	<div id='checkerboard'>
<?php
	for($i = 1; $i < 9; $i++)
	{
		if($i % 2 != 0)	
		{
			for ($j = 1; $j <= 4; $j++)
			{
?>			
				<div class="red checker"></div>
				<div class="black checker"></div>
	<!-- 	<div class="red checker"></div>
		<div class="black checker"></div>
		<div class="red checker"></div>
		<div class="black checker"></div>
		<div class="red checker"></div>
		<div class="black checker"></div>
		<br> -->
<?php
			}
		}
		else
		{
			for ($j = 1; $j <= 4; $j++)
			{
?>
				<div class="black checker"></div>
				<div class="red checker"></div>
	<!-- 	<div class="black checker"></div>
		<div class="red checker"></div>
		<div class="black checker"></div>
		<div class="red checker"></div>
		<div class="black checker"></div>
		<div class="red checker"></div>
		<br> -->
<?php
			}
		}
		echo '<br>';
	}
?>
	</div>
</body>
</html>