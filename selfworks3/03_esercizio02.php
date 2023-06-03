<?php
/* 
    TODO: Esercizio 2
    Modificare la funzione dell'esercizio 1 in questo modo:
        - non deve più stampare il risultato
        - deve restituire il risultato della somma attraverso "return"
    Una volta effettuata questa modifica, memorizzare il valore restituito dalla funzione in una variabile $somma e successivamente stamparlo attraverso la funzione echo.
*/

function calcSum($value1, $value2) {    
    return $value1 + $value2;
}

$somma = calcSum(10, 4);

echo $somma;