<?php
$servername = "localhost";
$username='username';
$password='password';

$conn=new mysqli($servername,$username, $password);
if($conn->connect_error){
	die('conection failed: '.$conn->connect_error);
}

$sql='CREATE DATABASE myDB';
if($conn->query($sql)===TRUE){
	echo 'database created';
} else{
	echo 'error'.$conn->error;
}
$conn->close();
?>
