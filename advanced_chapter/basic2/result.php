<?php  

	session_start();
	// session_destroy();
	if (!isset($_SESSION['counter']))
	{
		$_SESSION['counter'] = 1;
	}
	else
	{
		$_SESSION['counter'] += 1;
	}

?>
<style>
	div
	{
		border: 2px solid black;
		margin-left: auto;
		margin-right: auto;
		margin-bottom: .75em;
		width: 30em;
		padding: 1em 1em;
	}
	#back
	{
		background-color: blue;
		color: white;
		text-decoration: none;
		padding: .5em .5em;
		margin-top: 3em;
		border: 1px solid black;
		margin-left: 70%;
	}
</style>
<div>
	<p>Thanks for submitting this form! You have submitted this form <?= $_SESSION['counter'] ?> times now.</p>
</div>
<div>
	<h1>Submitted Information</h1>
	<table>
		<tr>
			<td>Name:</td>
			<td><?= $_POST['first_name'] ?></td>
		</tr>
		<tr>
			<td>Dojo Location:</td>
			<td><?= $_POST['location'] ?></td>
		</tr>
		<tr>
			<td>Favorite Language:</td>
			<td><?= $_POST['language'] ?></td>
		</tr>
		<tr>
			<td>Comment:</td>
			<td><?= $_POST['comment'] ?></td>
		</tr>
	</table>
	<a href="index.php" id="back"> Go Back</a>
</div>