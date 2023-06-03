<?php
/* 
    TODO: Esercizio 5
    All'array precedente, aggiungere un nuovo elemento con chiave ‘accessori' che contenga a sua volta questi due elementi: cambio automatico, navigatore satellitare.
*/

$car = [
    'marca' => 'Fiat',
    'modello' => '500',
    'motore' => 'elettrico',
    'colore' => 'rosso',
    'accessori' => [
        'cambio' => 'automatico',
        'navigatore' => 'satellitare'
    ]
];

var_dump($car);