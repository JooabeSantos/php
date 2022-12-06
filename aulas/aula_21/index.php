<?php
date_default_timezone_set('America/Sao_Paulo');
echo date('d') ."='d'";

echo '<hr>';

echo date('D') . "='D'";

echo '<hr>';

echo date('m') . "='m'";

echo '<hr>';

echo date('M') . "='M'";

echo '<hr>';

echo date('y') . "='y'";

echo '<hr>';

echo date('Y') . "='Y'";

echo '<hr>';

echo date('l') . "='l'";

echo '<hr>';

echo date('d/m/Y H:i:s') . "  ='d/m/Y H:i:s'";

echo '<hr>';

$date = date('Y-m-d');//date

$datetime = date('Y-m-d H:i:s'); //date time

echo '<br>';

$time = time();
echo date('d/m/y', $time);




