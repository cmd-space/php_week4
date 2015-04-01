<?php

	session_start();

	if (!isset($_SESSION['errors']))
	{
		$_SESSION['errors'] = array();
	}

	if (!isset($_SESSION['success']))
	{
		$_SESSION['success'] = array();
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration without DB</title>
	<style>
		div
		{
			margin-left: 30%;
		}
		.red
		{
			color: red;
		}
		.red_back
		{
			background-color: red;
		}
		.green
		{
			color: green;
		}
	</style>
</head>
<body>
	<div>
		<?php 
			foreach ($_SESSION['errors'] as $errors)
			{
				echo $errors;
			}
		?>
		<form action="process.php" method="post" enctype="multipart/form-data">
			<h1>Fields marked with * are mandatory. Thank you!</h1>
			<label for="email"<?php if(in_array('<p class="red">Please use a correct email</p>', $_SESSION['errors'])) {echo ' class="red_back"';} ?>>Email*</label>
			<input type="text" name="email"><br>
			<label for="first_name"<?php if(in_array('<p class="red">Your first name should be larger than 1 character, and cannot contain numbers</p>', $_SESSION['errors'])) {echo ' class="red_back"';} ?>>First Name*</label>
			<input type="text" name="first_name"><br>
			<label for="last_name"<?php if(in_array('<p class="red">Your last name should be larger than 1 character, and cannot contain numbers<p>', $_SESSION['errors'])) {echo ' class="red_back"';} ?>>Last Name*</label>
			<input type="text" name="last_name"><br>
			<label for="pass"<?php if(in_array('<p class="red">Your password must be longer than 6 characters<p>', $_SESSION['errors'])) {echo ' class="red_back"';} ?>>Password*</label>
			<input type="password" name="pass"><br>
			<label for="confirm"<?php if(in_array('<p class="red">Your passwords do not match<p>', $_SESSION['errors'])) {echo ' class="red_back"';} ?>>Confirm Password*</label>
			<input type="password" name="confirm"><br>
			<label for="birth"<?php if(in_array('<p class="red">Please enter a correct date of birth<p>', $_SESSION['errors'])) {echo ' class="red_back"';} ?>>Birth Date as MM/DD/YYYY</label>
			<input type="text" name="birth_month" size="2">
			<input type="text" name="birth_day" size="2">
			<input type="text" name="birth_year" size="4"><br>
			<label for="pic"<?php if(in_array('<p class="red">Sorry - Your file did not upload</p>', $_SESSION['errors'])) {echo ' class="red_back"';} ?>>Profile Picture</label>
			<input type="file" name="pic"><br>
			<input type="submit" value="Register">
		<?php
			if (count($_SESSION['success']) > 0)
			{
					echo '<p class="green">' . $_SESSION['success'][0] . '</p>';
			}
		?>
		</form>
		<form action="process.php" method="post">
			<input type="hidden" name="destroy" value="restart">
			<input type="submit" value="destroy session">
		</form>
	</div>
</body>
</html>