<?php
	$A = array(1, 2, 5, 10, 255, 3);
	$sum = 0;
	$nums_in_array = count($A);
	foreach ($A as $num)
	{
			$sum += $num;
	}
	$average = $sum / $nums_in_array;
	echo $average;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Intro III</title>
</head>
<body>
	
</body>
</html>