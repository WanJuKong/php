<?php
$servername = 'localhost';
$username = 'username';
$pasword = 'password';
$dbname = 'db';

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connet_error){
	die('connection failed : '.$conn->connect_error);
}

$sql = "INSERT INTO Guests (name, email, age)
	VALUES ('a','a','21')";

if(conn->querry($sql) === TRUE){
	$last_id=$conn->insert_id;
	echo "New record created, last id : ".$last_id;
} else {
	echo 'error : '.$sql . "<br>".$conn->error;
}
$conn->close();
?>
