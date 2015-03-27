<?php
	function multiply($array, $factor)
	{
		foreach ($array as &$number)
		{
			$number = $number * $factor;
		}
		return $array;
	}
	$A = array(2, 4, 10, 16);
	$B = multiply($A, 5);
	var_dump($B);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Intro V</title>
</head>
<body>
	
</body>
</html>