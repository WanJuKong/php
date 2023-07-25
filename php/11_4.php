<?php

$file = fopen('file.txt', 'r') or die ('nope');
while(!feof($file)){
	echo fgetc($file);
}
fclose($file);
?>
