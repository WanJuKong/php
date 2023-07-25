<?php

$servername = 'localhost';
$username = 'username';
$password = 'password';
$dbname = 'db';

try {
	$conn = new PDO("mysqli:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO Guests(name, email, age)
		VALUES ('waudj', 'jdiawj@asd', 12)";
	$conn->exec($sql);
	$last_id = $conn->lastInsertID();
	echo 'created, last id : '.$last_id;
} catch(PDOException $e) {
	echo $sql.'<br>'.$e->getMessage();
}

$conn = null;
?>
