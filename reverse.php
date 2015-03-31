<?php

	$array1 = array(4, 5, 92, 282, 1);
	$array_len = count($array1)/2;
	for ($i = 0; $i < $array_len; $i++)
	{
		$temp = $array1[$i];
		$array1[$i] = $array1[count($array1)-1-$i];
		$array1[count($array1)-1-$i] = $temp;
	}
	var_dump($array1);

?>