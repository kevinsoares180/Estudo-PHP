<?php

class Pessoa
{
    function falar()
    {
        echo 'Olá pessoal';
    }
}

$kevin = new Pessoa();

$kevin->nome = 'Kevin';

echo $kevin->nome;

echo "<br>";

$kevin->falar();