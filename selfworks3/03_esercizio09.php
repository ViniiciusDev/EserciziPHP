<?php
/* 
    TODO:Esercizio 9
    Creare una funzione check_password_lenght che verifica se la lunghezza di una password (stringa) è di lunghezza compresa tra 8 e 18 caratteri. Se è compresa tra questi due valori, restituisce true, altrimenti false
*/

$password = 'sonounapasswordpiulungadeldovuto';

function check_password_lenght($password)   {
    $passwordLen = strlen($password);
    if (8 <= $passwordLen && $passwordLen <= 18)    {
        echo 'true'; 
    } else {
        echo 'ERROR: La password deve contenere un un minimo di 8 e massimo 18 caratteri.';
    }
}

echo check_password_lenght($password);