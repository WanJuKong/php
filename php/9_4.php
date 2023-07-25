<?php
$nameErr = $ageErr = $emailErr = '';
$name = $age = $email = $gender = $comment = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(empty($_POST['name'])){
		$nameErr = 'name is required';
	}else{
		$name = test_input($_POST['name']
	}
	if(empty($_POST['age'])){
                $ageErr = 'age is required';
        }else{
                $age = test_input($_POST['age']
	}
	if(empty($_POST['email'])){
                $emailErr = 'E-mail is required';
        }else{
                $email = test_input($_POST['email']
	}
}

function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>
