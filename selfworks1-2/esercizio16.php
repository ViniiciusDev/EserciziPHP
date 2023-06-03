<?php
/* 
    TODO: Esercizio 16
    Modificare l'esercizio 11 in modo da stampare ‘Nessun corso disponibile' se rimuoviamo tutti gli elementi dall'array.
*/

$corsi = [
    'PHP',
    'Laravel',
    'Javascript',
    'CSS',
    'HTML'
];

$corsi = []; // Tipo falsy

if($corsi)  {
    foreach ($corsi as $corso) {
        echo "$corso\n";
    }
} else {
    echo 'Nessun corso disponibile!!';
}


