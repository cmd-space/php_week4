<?php

	function draw_stars($array)
	{
		$stars = '*';
		$letters = '';
		foreach ($array as $value) 
		{
			if (is_numeric($value) == true)
			{
				for ($i = 1; $i <= $value; $i++)
				{
					echo $stars;
				}
				echo '<br>';
			}
			else if (is_numeric($value) == false)
			{
				$lower = strtolower($value);
				$letters_array = str_split($lower);
				$letters = $letters_array[0];
				// var_dump($letters_array);
				foreach ($letters_array as $value1)
				{
					echo $letters;
				}
				echo '<br>';
			}
		}
	}

	$x = array(4, 'Tom', 1, 'Michael', 5, 7, 'Jimmy Smith');
	draw_stars($x);
?>