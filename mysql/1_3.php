<?php
$sn='servername';
$un-'username';
$pw='password';
$dbname='mydb';

$conn =new mysqli($sn,$un,$pw,$dbname);
if ($conn->conect_error){
	die('connection failed: '.$conn->connect_error);
}

$sql = 'CREATETA_TABLE test(
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50).
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)';
if($conn->query($sql) ===TRUE){
	echo 'table created successfully';
} else {
	echo 'error creating table:'.$conn->error;
}

$conn->close();
?>


