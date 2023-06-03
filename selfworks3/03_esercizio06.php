<?php
/* 
    TODO: Esercizio 6
    Creare una funzione somma che possa sommare "infiniti" numeri passati come singoli parametri.   
*/

function infinitSum(...$values)   {
    $valore = 0;
    foreach ($values as $value) {
        $valore += $value;
    }
    return $valore;
}

echo infinitSum(1,3,5,7,4);