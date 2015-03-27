<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Multiplication Table</title>
	<style rel="stylesheet" type="text/css">
		.bold
		{
			font-weight: bold;
			font-size: 1.2em;
		}
		.grey
		{
			background-color: lightgrey;
		}
		table
		{
			border-collapse: collapse;
		}
		table tr td
		{
			border: 1px solid grey;
			text-align: center;
			padding: .5em .5em;
		}
	</style>
</head>
<body>
	<table>
		<tr class='bold'>
			<td></td>
<?php 	
	for ($i = 1; $i < 10; $i++)
		{
			echo '<td>' . $i * 1 . '</td>';
		}
?>
		</tr>
		<tr class ='grey'>
			<td class='bold'>1</td>
<?php
	for ($i = 1; $i < 10; $i++)
		{
			echo '<td>' . $i * 1 . '</td>';
		}
?>
		</tr>
		<tr>
			<td class='bold'>2</td>
<?php
	for ($i = 1; $i < 10; $i++)
		{
			echo '<td>' . $i * 2 . '</td>';

		}
?>
		</tr>
		<tr class='grey'>
			<td class='bold'>3</td>
<?php
	for ($i = 1; $i < 10; $i++)
		{
			echo '<td>' . $i * 3 . '</td>';

		}
?>
		</tr>
		<tr>
			<td class = 'bold'>4</td>
<?php
	for ($i = 1; $i < 10; $i++)
		{
			echo '<td>' . $i * 4 . '</td>';

		}
?>
		</tr>
		<tr class='grey'>
			<td class='bold'>5</td>
<?php
	for ($i = 1; $i < 10; $i++)
		{
			echo '<td>' . $i * 5 . '</td>';

		}
?>
		</tr>
		<tr>
			<td class='bold'>6</td>
<?php
	for ($i = 1; $i < 10; $i++)
		{
			echo '<td>' . $i * 6 . '</td>';

		}
?>
		</tr>
		<tr class='grey'>
			<td class='bold'>7</td>
<?php
	for ($i = 1; $i < 10; $i++)
		{
			echo '<td>' . $i * 7 . '</td>';

		}
?>
		</tr>
		<tr>
			<td class='bold'>8</td>
<?php
	for ($i = 1; $i < 10; $i++)
		{
			echo '<td>' . $i * 8 . '</td>';

		}
?>
		</tr>
		<tr class='grey'>
			<td class='bold'>9</td>
<?php
	for ($i = 1; $i < 10; $i++)
		{
			echo '<td>' . $i * 9 . '</td>';

		}
?>
		</tr>
	</table>
</body>
</html>