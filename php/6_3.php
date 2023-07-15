<?php
function add5(&$v){
	$v+=5;
}

$num = 2;
add5($num);
echo $num;
?>
