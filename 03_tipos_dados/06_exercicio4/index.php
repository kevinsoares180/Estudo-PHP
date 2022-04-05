<?php

$a = 1.5;
$b = 53.10;
$c = -9.8;

echo $a;
echo '<br>';
echo $b;
echo '<br>';
echo $c;
echo '<br>';

if(is_float($c))
{
    echo ''.$c.' é um float (Podemos ter float negativos)';
    echo '<br>';
}
if(is_int($c))
{
    echo 'teste';
}