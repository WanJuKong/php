<?php

$servername='localhost';
$username='username';
$password='password';
$dbname='db';

$conn=new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
	die('connection failed:'.$conn->connect_error);
}

$sql = "INSERT INFO Guests (name, email, age)
	VALUES('juwan','juwan3057@naver.com','18)";

if($conn->query($sql) === TRUE){
	echo 'created';
} else {
	echo 'error'.$conn->error;
}

$conn->close();
?>
