<?php

$teste = 'ads <br>';

if(true)
{
    echo "$teste";
}
if(true)
{
    $teste = 'oi <br>';
    echo "$teste";
}
echo "$teste";

function funcao()
{
    global $teste;
    echo "$teste";
}
funcao();