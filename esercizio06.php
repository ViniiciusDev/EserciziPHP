<?php
/* 
    TODO: Esercizio 6
    Create 4 variabili: $x = 10; $y = 20; $z = "20"; $w = 10; ed utilizzando var_dump() visualizzate l'esito dei seguenti confronti:
    $x < $y [esempio: var_dump($x < $y); ]
    $x <= $w
    $y == $z
    $y === $z
    $y !== $z
    $y != $z
*/

$value1 = 10;
$value2 = 20;
$value3 = "20";
$value4 = 10;

var_dump($value1 < $value2);
var_dump($value1 < $value4);
var_dump($value2 == $value3);
var_dump($value2 === $value3);
var_dump($value2 !== $value3);
var_dump($value2 != $value3);