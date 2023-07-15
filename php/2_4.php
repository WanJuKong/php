<?php

$num_i = 100;
$num_f float(10.4);
$inf = 1.54e13123;
$fin = 1.21e-3676;

echo 'isint'.is_int($num_i);
echo 'isfloat'.is_float($num_f);
echo 'infinite'; var_dump($inf);
echo 'finite'; var_dump($fin);

?>
