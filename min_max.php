<?php

	function get_max_and_min($array)
	{
		$max = 0;
		$min = 100;
		$max_min = array();
		foreach ($array as $value) 
		{
			if ($value >= $max)
			{
				$max = $value;
				$max_min['max'] = $max;
			}
			else if ($value <= $min)
			{
				$min = $value;
				$max_min['min'] = $min;
			}
		}
		return $max_min;
	}

	$sample = array(135, 2.4, 2.67, 1.23, 332, 2, 1.02);
	$output = get_max_and_min($sample);
	var_dump($output);
?>