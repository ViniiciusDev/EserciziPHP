<?php
/* 
    TODO: Esercizio 13
    Creare una variabile $button che contenga un numero intero. Poi, attraverso l'utilizzo di switch stampare le seguenti stringhe:
    Benvenuto al piano terra (se il valore di $button è uguale a 0)
    Benvenuto al primo piano (se il valore di $button è uguale a 1)
    Benvenuto al secondo piano (se il valore di $button è uguale a 2)
    Benvenuto al terzo piano (se il valore di $button è uguale a 3)
    Piano non disponibile (per qualsiasi altro valore di button)
*/

$button = 4;

switch ($button) {
    case '0':
            echo 'Benvenuto al piano terra';
        break;
    case '1':
            echo 'Benvenuto al primo piano';
        break;
    case '2':
            echo 'Benvenuto al secondo piano';
        break;
    case '3':
            echo 'Benvenuto al terzo piano';
        break;
    
    default:
        echo 'Piano non disponibile';
        break;
}