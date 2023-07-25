<?php
$file = fopen('file.txt','r')or die('error');
while(!feof($file)){
	echo fgets($file).'<br>';
}
fclose($file);
?>
