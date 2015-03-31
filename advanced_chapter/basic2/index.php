<?php  
	
	session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Survey Form</title>
	<style>
		#survey
		{
			margin-left: auto;
			margin-right: auto;
			width: 15em;
			border: 2px solid black;
			padding-left: 1em;
			padding-top: 1em;
			padding-bottom: 1em;
			line-height: 1.5em;
		}
		#sub
		{
			background-color: blue;
			color: white;
			margin-left: 70%;
		}
	</style>
</head>
<body>
	<div id='survey'>
		<form action="result.php" method="post">
			<label for="first_name">Your Name:</label>
			<input type="text" name="first_name" placeholder="full name pretty please">
			<label for="location">Dojo Location:</label>
			<select name="location">
				<option value="mountain view">Mountain View</option>
				<option value="san francisco">San Francisco</option>
				<option value="seattle">Seattle</option>
			</select>
			<label for="language">Favorite Language</label>
			<select name="language">
				<option value="javascript">Javascript</option>
				<option value="ruby">Ruby</option>
				<option value="php">PHP</option>
				<option value="c++">C++</option>
			</select>
			<label for="comment">Comment (optional):</label>
			<textarea name="comment" cols="34" rows="10"></textarea>
			<input type="submit" id='sub' value="Submit">
		</form>
	</div>
</body>
</html>