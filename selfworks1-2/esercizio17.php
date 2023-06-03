<?php
/* 
    TODO: Esercizio 17
    Modificare la variabile $total nell’esercizio 2 in modo da ottenerne il valore sommando gli importi contenuti nel seguente array:
    [1000, 2500, 1955.5, 560, 700]
*/

$total = 0;

$importi = [
    1000,
    2500,
    1955.5,
    560,
    700
];

foreach ($importi as $importo) {
    $total = $total + $importo;
}

$fattura = "Il totale degli importi delle fatture emesse questo mese é di $total euro";

echo $fattura;