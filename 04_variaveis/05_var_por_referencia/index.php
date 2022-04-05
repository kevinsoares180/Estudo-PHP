<?php

$x = 10;

$y =& $x;

echo $x;
echo '<br>';
echo $y;
echo '<br>';

$y = 15;

echo 'Após atribuir 15 ao $y <br>';
echo $x;
echo '<br>';
echo $y;
echo '<br>';

$x = 20;

echo 'Após atribuir 20 ao $x <br>';
echo $x;
echo '<br>';
echo $y;
echo '<br>';

echo 'Interligadas, não importa quem mudar';