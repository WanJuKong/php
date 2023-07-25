<?php
$servername='localhost';
$username='username';
$password='password';
$dbname='db';

try {
	$conn=new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="INSERT INTO Guests(name,email,age)
		VALUES('wanju','juwan3048@naver.com',20)";
	$conn->exec($sql);
	echo 'created';
} catch(PDOException $e){
	echo $sql."<br>".$e->getMessage();
}
$conn = null;
?>
