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
			$temp = 0;

			for ($k = 0; $k < count($array1); $k++)
			{
				if ($array1[$j] < $array1[$k])
				{
					$temp = $array1[$j];
					$array1[$j] = $array1[$k];
					$array1[$k] = $temp;
				}
			}
		}
		var_dump($array1);
	}

	sort_me();

?>