<?php
	header('Content-type: text/css');
	$colors = array('red', 'green', 'blue', 'orange', 'grey', 'black', 'yellow', 'purple');
	$random_h1 = $colors[rand(0, 7)];
	$random_p = $colors[rand(0, 7)];
	echo 'h1 {color: ' . $random_h1 . ';}';
	echo 'p {color: ' . $random_p . ';}';

?>