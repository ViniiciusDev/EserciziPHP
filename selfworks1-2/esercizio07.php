<?php
/* 
    TODO: Esercizio 7
    Create 4 variabili: $x = 10; $y = 20; $z = "20"; $w = "Sono una stringa"; ed utilizzando var_dump() visualizzate l'esito delle seguenti operazioni:
    $x + $y [esempio: var_dump($x + $y); ]
    $x + $z
    $x + $w
    $x . $w
    $x * $y
    $x / $y
    $x % $y
    $y % $x
*/

$x = 10;
$y = 20;
$z = "20";
$w = "Sono una stringa";

var_dump($x + $y);
var_dump($x + $z);
/* var_dump($x + $w); */ // ! Fatal ERROR
var_dump($x . $w);
var_dump($x * $y);
var_dump($x / $y);
var_dump($x % $y);
var_dump($y % $x);
