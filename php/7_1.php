<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = htmlspecialchars($_REQUEST['name']);
	if (empty($name))
		echo "name empty";
	else
		echo 'your name is $name';
}
?>

