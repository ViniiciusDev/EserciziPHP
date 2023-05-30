<?php
/* 
    TODO: Esercizio 12
    Stampare tutti gli elementi dell'array all'esercizio 4 utilizzando foreach, visualizzandone anche la chiave.
*/

$cars = [
    'marca' => 'Fiat',
    'modello' => '500',
    'motore' => 'elettrico',
    'colore' => 'rosso'
];

foreach ($cars as $key => $car) {
    echo $key . " " . $car . "\n";
}