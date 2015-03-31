<?php  

	session_start();

	$_SESSION['errors'] = array();
	$_SESSION['success'] = array();

	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
	{
		$_SESSION['success'] = 'The email address you entered ( ' . $_POST['email'] . ' ) is a VALID email address! Thank you!';
		header('location: success.php');
		die();
	}
	else
	{
		$_SESSION['errors'] = 'The email address you entered ( ' . $_POST['email'] . ' ) is NOT a valid email address!';
		header('location: index.php');
		die();
	}

?>