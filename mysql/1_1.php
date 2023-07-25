<?php

$servername = 'localhost';
$username = 'username';
$password = 'password';

$conn = new mysqli($servername, $username, $password);
if($conn->connect_error){
	die('connection failed: '.$conn->connect_error);
}

$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE){
	echo 'Database created';
}else{
	echo 'error creating database: '.$conn->error;
}

$conn->close();
?>
