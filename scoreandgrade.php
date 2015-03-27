<?php
	
	function score()
	{
		$score = rand(50, 100);
		if ($score < 70)
		{
			echo '<h1>Your Score: ' . $score . '/100</h1><br>
			<h2>Your grade is D.<h2>';
		}
		else if ($score < 80)
		{
			echo '<h1>Your Score: ' . $score . '/100</h1><br>
			<h2>Your grade is C.<h2>';
		}
		else if ($score < 90)
		{
			echo '<h1>Your Score: ' . $score . '/100</h1><br>
			<h2>Your grade is B.<h2>';
		}
		else if ($score <=100)
		{
			echo '<h1>Your Score: ' . $score . '/100</h1><br>
			<h2>Your grade is A.<h2>';
		}
	}

	for ($i = 1; $i <= 100; $i++)
	{
		score();
		echo $i;
	}

?>