<?php
/* 
    TODO: Esercizio 14
    Utilizzando opportunamente foreach ed if: creare una variabile $search che contiene uno degli elementi a piacere dell'esercizio 3. Poi scorrere l'array dell'esercizio 3 utilizzando foreach e stampare "Trovato!" se l'elemento corrente è uguale a quello contenuto nella variabile $search.
*/
$search = 'Laravel';

$corsi = [
    'PHP',
    'Laravel',
    'Javascript',
    'CSS',
    'HTML'
];

foreach ($corsi as $corso) {
    if ($search === $corso) {
        echo 'Trovato';
    }
}