<?php

$file = fopen('file.txt', 'r') or die('err');
echo fread($file, filesize('file.txt'));
fclose($file);

?>
