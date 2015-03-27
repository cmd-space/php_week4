<?php

	function sort_me()
	{
		$array1 = array();

		for ($i = 0; $i < 100; $i++)
		{
			$array1[] = rand(0,10000);
		}
		var_dump($array1);
	}

	sort_me();

?>