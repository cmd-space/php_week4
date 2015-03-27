<?php
	
	function keys_array($array)
	{
		echo "There are " . count($array) . " keys in this array: first_name, last_name<br>";
		foreach ($array as $key => $value)
		{
			echo "The value in the key '" . $key . "' is '" . $value . "'.<br>";
		}
	}

	$users['first_name'] = 'Michael';
	$users['last_name'] = 'Choi';
	keys_array($users);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Intro VII</title>
</head>
<body>
	
</body>
</html>