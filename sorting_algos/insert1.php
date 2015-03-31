<?php

	function insert_me()
	{
		$array1 = array();

		for ($i = 0; $i < 100; $i++)
		{
			$array1[] = rand(0,10000);
		}

		for ($j = 0; $j < count($array1); $j++)
		{
			for ($k = 0; $k < count($array1); $k++)
			{
				// $temp = 0;
				// $temp2 = 0;
				if ($array1[$k] > $array1[$j])
				{
					// $temp = $array1[$k];
					// $array1[$k] = $array1[$j];
					// $array1[$j] = $temp;
					for ($l = 0; $l < count($array1[$k]); $l++)
					{
						$temp2 = $array1[$k];
						$array1[$k] = $array1[$l];
						$array1[$l] = $temp2;
						// // $array1[$k] = $array1[$j];
						// if ($array1[$l] < $array1[$l-1])
						// {
						// 	$temp2 = $array1[$l];
						// 	$array1[$l] = $array1[$l-1];
						// 	$array1[$l-1] = $temp2;
						// }
					}
				}
				// }
			}
		}
		var_dump($array1);
	}
	insert_me();
?>