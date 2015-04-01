<?php

	session_start();
	$_SESSION['errors'] = array();
	$_SESSION['success'] = array();

	if (!empty($_POST['destroy']))
	{
		session_destroy();
		header('location: index.php');
		die();
	}

	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
	{
		$_SESSION['errors'][] = '<p class="red">Please use a correct email</p>';
	}
	
	if (strlen($_POST['first_name']) <= 2 || is_numeric($_POST['first_name']))
	{
		$_SESSION['errors'][] = '<p class="red">Your first name should be larger than 1 character, and cannot contain numbers</p>';
	}

	if (strlen($_POST['last_name']) <= 2 || is_numeric($_POST['last_name']))
	{
		$_SESSION['errors'][] = '<p class="red">Your last name should be larger than 1 character, and cannot contain numbers<p>';
	}

	if (strlen($_POST['pass']) < 6)
	{
		$_SESSION['errors'][] = '<p class="red">Your password must be longer than 6 characters<p>';
	}

	if ($_POST['confirm'] != $_POST['pass'])
	{
		$_SESSION['errors'][] = '<p class="red">Your passwords do not match<p>';
	}

	if (!empty($_POST['birth_month']) || !empty($_POST['birth_day']) || !empty($_POST['birth_year']))
	{
		if (is_numeric($_POST['birth_month']) && is_numeric($_POST['birth_day']) && is_numeric($_POST['birth_year']))
		{
			if (!checkdate($_POST['birth_month'], $_POST['birth_day'], $_POST['birth_year']))
			{
				$_SESSION['errors'][] = '<p class="red">Please enter a correct date of birth<p>';
			}
		}
		else
		{
			$_SESSION['errors'][] = '<p class="red">Please enter a correct date of birth<p>';
		}
	}

	if (is_uploaded_file($_FILES['pic']['tmp_name']))
	{
		$target = 'upload/';
		$target = $target . basename($_FILES['pic']['name']);
		if(!move_uploaded_file($_FILES['pic']['tmp_name'], $target))
		{
			$_SESSION['errors'][] = '<p class="red">Sorry - Your file did not upload</p>';
		}
	}

	if (count($_SESSION['errors']) == 0)
	{
		$_SESSION['success'][] = 'Successfully registered! Thank you!';
	}

	header('location: index.php');
	die();

?>