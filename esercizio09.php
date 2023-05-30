<?php
/* 
    TODO: Esercizio 9
    Utilizzare un ciclo for per stampare i numeri da 1 a 10. Ripetere lo stesso esercizio utilizzando while e do while.
*/

// ? Ciclo for 
echo "Inizio Ciclo FOR\n";

for ($i=1; $i <= 10; $i++) { 
    echo $i . "\n";
}

echo "Fine Ciclo For";

// ? CICLO WHILE
echo "Inizio Ciclo WHILE\n";

$a = 1;

while ($a <= 10) {
    echo $a . "\n";
    $a++;
}

echo "Fine Ciclo WHILE\n";

// ? CICLO DO WHILE
echo "Inizio Ciclo DO WHILE\n";
$d = 1;

do {
    echo $d . "\n";
    $d++;
} while ($d <= 10);

echo "fine Ciclo DO WHILE";