<?php
$str = "how to use regularexpressions case insensitive";
$reg = "/RegularExpression/i";

echo preg_match($reg, $str);
?>
