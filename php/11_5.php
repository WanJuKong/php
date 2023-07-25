<?php

$file = fopen('testfile.txt','w') or die ('nope');
$text = 'hello new test text!';
fwrite($file, $text);
fclose($file);

?>
