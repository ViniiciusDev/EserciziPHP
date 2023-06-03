<?php
/* 
    TODO: Esercizio 5
    Data una variabile $testo = 'Testo iniziale', creare una funzione che modifichi il valore di quella variabile esterna con un testo a piacere passando il parametro per riferimento (&).
*/

$testo = 'Testo Iniziale' . "\n";

echo $testo;

function edit(&$testo) {
    return $testo = 'Questo é il testo modificado';
}

echo edit($testo);