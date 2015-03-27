<?php
	function print_lists($array)
	{
		echo '<ul>';
		foreach ($array as $value)
		{
			echo '<li>' . $value . '</li>';
		}
		echo '</ul>';
	}

	$A = array(2, 3, 'hello');
	print_lists($A);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Intro VI</title>
</head>
<body>
	
</body>
</html>