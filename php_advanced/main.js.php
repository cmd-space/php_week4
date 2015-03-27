<?php
	header('Content-type: text/javascript');

	$numbers = array();

	for ($i = 1; $i < 100; $i++)
	{ 
		$numbers[] = $i;
	}

	$mult1 = $numbers[rand(0, count($numbers))];
	$mult2 = $numbers[rand(0, count($numbers))];
	$product = $mult1 * $mult2;

	echo "$(document).ready(function(){alert('" . $mult1 . " x " . $mult2 . " = " . $product . "');});";
?>