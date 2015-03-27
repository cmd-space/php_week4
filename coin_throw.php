<?php

	function coin_throw()
	{
		$heads = 0;
		$tails = 0;
		echo '<b>Starting the program</b><br>';
		for ($i = 1; $i <= 5000; $i++)
		{
			$throw = rand(1,2);
			if ($throw == 1)
			{
				$heads = $heads + 1;
				echo "Attempt #" . $i . ": Throwing a coin... It's a head! ... Got " . $heads . " head(s) so far and " . $tails . " tail(s) so far<br>";
			}
			else
			{
				$tails = $tails + 1;
				echo "Attempt #" . $i . ": Throwing a coin... It's a tail! ... Got " . $heads . " heads(s) so far and " . $tails . " tail(s) so far<br>";
			}
		}
		echo '<b>Ending the program - thank you!</b>';
	}
	coin_throw();
?>