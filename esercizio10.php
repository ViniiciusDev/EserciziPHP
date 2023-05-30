<?php
/* 
    TODO: Esercizio 10
    Utilizzando un ciclo for, stampare tutti i numeri pari da 2 a 10.
*/

for ($i=0; $i <= 10 ; $i++) { 
    echo ($i % 2) + $i++ . "\n";
}