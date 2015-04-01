<?php

	session_start();

	date_default_timezone_set('America/Denver');

	if (!empty($_POST['restart']))
	{
		session_destroy();
		header('location: index.php');
		die();
	}

	if ($_POST['building'] == 'farm')
	{
		$gold = rand(10,20);
	}
	if ($_POST['building'] == 'cave')
	{
		$gold = rand(5,10);
	}
	if ($_POST['building'] == 'house')
	{
		$gold = rand(2,5);
	}
	if ($_POST['building'] == 'casino')
	{
		$dice = rand(0,100);
		if ($dice >= 30)
		{
			$gold = rand(0,50);
		}
		else
		{
			$gold = rand(0,50);
			$gold *= -1;
		}
	}
	$_SESSION['gold'] += $gold;
	if ($gold < 0)
	{
		$_SESSION['activities'][] = '<p class="fail">You entered a ' . $_POST['building'] . ' and lost ' . abs($gold) . ' gold... Ouch..&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(' . date("F jS Y g:i a") . ')</p>';
	}
	else
	{
		$_SESSION['activities'][] = '<p class="success">You entered a ' . $_POST['building'] . ' and earned ' . $gold . ' gold.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(' . date("F jS Y g:i a") . ')</p>';
	}
	header('location: index.php');
	die();

?>