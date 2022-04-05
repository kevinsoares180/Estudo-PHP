<?php

$podeEntrar = true;

if(is_bool($podeEntrar))
{
    echo 'É um boolean <br>';
}
if(is_bool(0))
{
    echo 'É um boolean';
}
if(is_bool(false))
{
    echo 'É um boolean <br>';
}
if(0 == false)
{
    echo 'É igual <br>';
}
if(1 == true)
{
    echo 'É igual <br>';
}