<?php
$a = 3; //global
function func(){
	echo $a; //error
}
function func2(){
	global $a;
	echo $a;
}
function func3(){
	echo $GLOBALS['a'];
func();
func2();
func3();
?>

