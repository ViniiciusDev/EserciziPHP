<?php
/* 
    TODO: Esercizio 02
    Creare due variabili che contengano il seguente testo: “Il totale degli importi delle fatture emesse questo \mese è di X euro". La prima utilizzando gli apici singoli e la seconda gli apici doppi.
    In seguito creare una variabile $total contente un valore numerico a piacere ed utilizzarla nelle stringhe appena create in modo da visualizzare il valore contenuto nella variabile $total al posto di X senza modificare il tipo di apici utilizzati nelle stringhe.
*/

$total = 120;

$fattura01 = 'Il totale degli importi delle fatture emesse questo' . "\n" . 'mese é di ' . $total . ' euro.' . "\n";
echo $fattura01;
$fattura02 = "Il totale degli importi delle fatture emesse questo \nmese é di $total euro.";
echo $fattura02;