<?php 
	$first_name = 'Randall';
	$last_name = 'Frisk';
	// echo $first_name;
	// echo $last_name;

	$occupation = 'Instructor';

	// echo "My name is $first_name $last_name and my occupation is $occupation";

	// echo 'My name is ' . $first_name . ' ' . $last_name . ' and my occupation is ' . $occupation;	

	$num1 = 5;
	$num2 = 7;
	$result = $num1 + $num2;
	echo $result;

	echo $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php test</title>
</head>
<style type='text/css'>
	.header{
		color:red;
	}
</style>
<body>
	<h1 class="<?php echo 'header'; ?>"><?php echo 'hello coding dojo students! How are you'; ?></h1>
</body>
</html>
<?php  
	// echo 'Hello Dojo';
	// print 'Hello Dojo';
	// echo 'Hello Dojo', ' How are you?';

	// $students = array();
	// $students[] = "Randall";
	// $students[] = "Michael";
	// $students[] = "Charles";

	// echo 'This is student 0: ' . $students[0] . '<br>';
	// echo 'This is student 1: ' . $students[1] . '<br>';
	// echo 'This is student 2: ' . $students[2] . '<br>';

	// $students = array('randall', 'michael', 'charles', 'dexter');
	// echo 'This is student 0: ' . $students[0] . '<br>';
	// echo 'This is student 1: ' . $students[1] . '<br>';
	// echo 'This is student 2: ' . $students[2] . '<br>';
	// echo 'This is student 3: ' . $students[3] . '<br>';

	// $students = array(
	// 	array('randall', 'frisk', 27), 
	// 	array('michael', 'choi', 33), 
	// 	array('charles', 'holloman', 27)
	// );
	// echo $students[0][2];

	// $student = array('first_name' => 'randall', 'last_name' =>  'frisk', 'age' => 27);

	// echo $student['first_name'].'<br>';
	// echo $student['last_name'].'<br>';
	// echo $student['age'].'<br>';

	// $students = array(
	// 	array('first_name' => 'randall', 'last_name' =>  'frisk', 'age' => 27),
	// 	array('first_name' => 'michael', 'last_name' =>  'choi', 'age' => 33),
	// 	array('first_name' => 'charles', 'last_name' =>  'holloman', 'age' => 27),
	// 	);

	// echo $students[0]['first_name'];

	// false
	// ''
	// 0
	// NULL
	// above all considered false

	// if(){
	// 	echo 'this is the truth';
	// }
	// else{
	// 	echo 'this is not a lie';
	// }

	$name = 'Joey';
	$on_guest_list = false;
	$guest_number = 5;
	$age = 33;
	$party_message = '';

	if($on_guest_list){
		$party_message = 'Hey ' . $name . '! Welcome to the party!';
	}
	else if($name == 'Joey'){
		$party_message = 'sorry ' . $name . '. You are not allowed';
	}
	else if($name == 'Sarah'){
		$party_message = 'sorry ' . $name . '. You are not allowed';
	}
	else if($guest_number > 10){
		$party_message = 'sorry ' . $name . ', but we have too many partiers here!';
	}
	else if($age <= 20){
		$age_difference = 21 - $age;
		$party_message = 'sorry ' . $name . ', but you have ' . $age_difference . ' more year(s) to go';
	}
	
	else{
		$party_message = 'hey ' . $name . ' we are happy to have you!';
	}
	echo $party_message;





?>