<?php
/* 
    TODO: Esercizio 3
    Stampare il risultato di somma(2, 5), senza modificare la funzione, direttamente attraverso echo senza salvare il valore restituito in una variabile.
*/

function calcSum($value1, $value2) {    
    return $value1 + $value2;
}

$somma = calcSum(10, 4);

echo calcSum(2, 5);