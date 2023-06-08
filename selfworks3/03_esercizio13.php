<?php
/* 
    TODO: Esercizio 13  - Extra (lo vediamo a lezione, provate comunque a risolverlo)
    Scrivere una funzione che prenda in input un array ed una stringa. La funzione cerca l'elemento indicato nella stringa tra gli elementi degli array e se lo trova stampa il messaggio: "Trovato alla posizione: n" dove n è l'indice dell'elemento nell'array. Se l'elemento non viene trovato, la funzione stampa il messaggio: "Elemento non trovato". Se l'elemento viene trovato, interrompere il foreach con il comando "break".
*/

$corsi = [
    'PHP',
    'Laravel',
    'Javascript',
    'CSS',
    'HTML'
];
$search = 'HTML';

function searching($corsi, $search) {
    $found = false; // false se l'elemento non e` stato trovato, true se l'elemento e` stato trovato.
    foreach ($corsi as $key => $corso) {
        if($corso === $search)  {
            echo 'Trovato alla posizione:' . $key . "\n";
            $found = true;
            break;
        }
    }

    if (! $found)   {
        echo 'Elemento non trovato!';
    }
}

searching($corsi, $search);