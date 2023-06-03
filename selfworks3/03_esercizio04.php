<?php
/* 
    TODO: Esercizio 4
    Creare una funzione stampa_testo che accetta come parametro una stringa da stampare. Fare in modo che se non viene passato nessun parametro, la funzione non generi errori e stampi un messaggio: ‘Attenzione: non hai indicato la stringa da stampare'.
*/

function stampa_testo($stringa = null) {
    if ($stringa === null)    {
        echo "Attenzione: non hai indicato la stringa da stampare";
    } else {
        echo $stringa;
    }
}

echo stampa_testo('Sono una stringa nella funzione');