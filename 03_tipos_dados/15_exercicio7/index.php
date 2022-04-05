<?php

$ar = ['nome' => 'Kevin', 'cabelo' => 'preto', 'idade' => 23, 'homem' => true];

if($ar['idade'] >= 18)
{
    $nome = $ar['nome'];
    echo "O $nome é maior de idade";
}

