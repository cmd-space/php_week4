<?php

	$array2 = array(4, -5, 0, 10, -8, 20);

	for ($i = 0; $i < count($array2); $i++)
	{
		$count = 0;
		if ($array2[$i] < 0)
		{
			$temp = $array2[$i];
			$array2[] = $temp;
			$array2[$i] = 'undefined';
			// $count++;
			// $temp = $array2[$i];
			// $array2[$i] = $array2[count($array2)-1];
			// $array2[count($array2)-1] = $temp;
			// if ($array2)
			array_pop($array2);
		}
	}
	// for ($i = 0; $i < count($array2); $i++)
	// {
	// 	if ($array2[$i])
	// }
	var_dump($array2);

?>

<!-- try to remove the negatives, while maintaing that order.

[4, 0, 10, 20] -->