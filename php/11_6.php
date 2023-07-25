<?php

$file = fopen('test.txt', 'a')or die('nope');
fwrite($file, '\nadd a line');
fclose($file);

?>
