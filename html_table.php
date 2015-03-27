<?php

	function html_table($array)
	{
		$user = 1;
		echo '<table>
				<tr class="bold">';
		$headers = array('User #', 'First Name', 'Last Name', 'Full Name', 'Full Name in upper case', 'Length of full name(without spaces)');
		for ($h = 0; $h < count($headers); $h++)
		{
			echo '<td>' . $headers[$h] . '</td>';
		}
		echo '</tr>';
		foreach ($array as $key => $value)
		{
			if ($user % 5 == 0)
			{
			echo '<tr class="row">';
			echo '<td class="bold">' . $user . '</td>';
			}
			else
			{
				echo '<tr>';
				echo '<td class="bold">' . $user . '</td>';
			}
			$full_name = implode(' ', $value);
			$name_len = implode('', $value);
			
			foreach ($value as $key1 => $value1)
			{
					echo '<td>' . $value1 . '</td>';
					if ($key1 == 'last_name')
					{
						echo '<td>' . $full_name . '</td>';
						echo '<td>' . strtoupper($full_name) . '</td>';
						echo '<td>' . strlen($name_len) . '</td>';
					}
			}
			echo '<tr>';
			$user++;
		}
		echo '</table>';
	}

	$users = array( 
	   array('first_name' => 'Michael', 'last_name' => 'Choi'),
	   array('first_name' => 'John', 'last_name' => 'Supsupin'),
	   array('first_name' => 'Mark', 'last_name' => 'Guillen'),
	   array('first_name' => 'KB', 'last_name' => 'Tonel'),
	   array('first_name' => 'Mason', 'last_name' => 'Crane'),
	   array('first_name' => 'Ashley', 'last_name' => 'Crane'),
	   array('first_name' => 'Chuck', 'last_name' => 'Norris'), 
	   array('first_name' => 'Joe', 'last_name' => 'Smith'),
	   array('first_name' => 'Jerry', 'last_name' => 'Seinfeld'),
	   array('first_name' => 'Eddie', 'last_name' => 'Izzard'),
	   array('first_name' => 'Engelbert', 'last_name' => 'Humperdinck'),
	   array('first_name' => 'Ashley', 'last_name' => 'Crane'),
	   array('first_name' => 'Ashley', 'last_name' => 'Crane'),
	   array('first_name' => 'Ashley', 'last_name' => 'Crane'),
	);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HTML Table</title>
	<style rel='stylesheet' type='text/css'>
		.bold
		{
			font-weight: bold;
		}
		table
		{
			border-collapse: collapse;
		}
		table tr td
		{
			border: 1px solid grey;
			padding: .25em .25em;
		}
		.row
		{
			background-color: black;
			color: white;
		}
	</style>
</head>
<body>
<?php
	html_table($users);
?>
</body>
</html>