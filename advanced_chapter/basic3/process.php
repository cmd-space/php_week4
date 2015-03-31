<?php  

	session_start();

	if (!empty($_POST['again']))
	{
		session_destroy();
		header('location: index.php');
		die();
	}

	$_SESSION['response'] = array();

	if ($_POST['guess'] == $_SESSION['rando'])
	{
		$_SESSION['response'] = $_POST['guess'] . ' was the number!';
	}
	else if ($_POST['guess'] < $_SESSION['rando']) 
	{
		$_SESSION['response'] = 'Too low!';
	}
	else
	{
		$_SESSION['response'] = 'Too high!';
	}

	header('location: index.php');
	die();

?>