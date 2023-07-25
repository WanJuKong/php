<?php
$servername = 'localhost';
$username = 'username';
$password = 'password';
$dbname = 'db';

$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
	die('connection failed'. mysqli_connect_error());
}

$sql = "INSERT INTO Guests (name, email, age)
	VALUES ('jwa', 'asdasd@asd', 123)";

if(mysqli_query($conn, $sql)){
	$last_id = mysqli_insert_id($conn);
	echo 'created, last id : '.$last_id;
} else {
	echo 'error : '. $sql . '<br>' . mysqli_error($conn);
}
$conn->close();
?>
