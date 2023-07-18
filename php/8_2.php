<?php
$str = 'hellO yelLow';
$ptn = '/llo/i';
echo preg_match_all($ptn, $str);
?>
