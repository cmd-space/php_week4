<?php

	$handle = fopen('us-500.csv', 'r');
	ini_set('auto_detect_line_endings', true);
	$data = fgetcsv($handle, 2000, ',');
	var_dump($data);

	// $

?>