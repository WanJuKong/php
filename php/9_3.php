<html>
<body>
<?php

function test_($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

function post_val(){
	$arr = array();
	foreach($_POST as $key => $val) {
		$arr[$key] = test_($val);
	}
	return $arr;
}

$arr=post_val();

foreach($arr as $key => $val) {
	echo "$key : $val<br>";
}

?>
</body>
</html>
