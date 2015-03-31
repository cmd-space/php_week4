<?php

	function sort_me()
	{
		$array1 = array();

		for ($i = 0; $i < 100; $i++)
		{
			$array1[] = rand(0,10000);
		}

		for ($j = 0; $j < count($array1); $j++)
		{
			$min = $array1[0];
			$max = $array1[count($array1)-1];
			$temp_min = 0;
			$temp_max = 0;

			for ($k = 0; $k < count($array1); $k++)
			{
				if ($max < $array1[$k])
				{
					$max = $array1[$k];
					$temp_max = $array1[count($array1)-1];
					$array1[count($array1)-1] = $array1[$k];
					$array1[$k] = $temp_max;
				}
				else if ($array1[$k] < $min)
				{
					$min = $array1[$k];
					$temp_min = $array1[$j];
					$array[$k] = $array1[$j];
					$array[$j] = $temp_min;
				}
			}
		}
		var_dump($array1);
	}

	sort_me();

?>