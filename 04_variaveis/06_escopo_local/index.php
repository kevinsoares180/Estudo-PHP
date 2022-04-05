<?php

$x = 10;

echo "$x global <br>";

function teste()
{
    $x = 5;
    echo "$x local <br>";
}

teste();

echo "$x global <br>";

teste();

function testeDois()
{
    $x = 2;
    echo "$x local 2 <br>";
}

testeDois();

teste();

echo "$x global <br>";