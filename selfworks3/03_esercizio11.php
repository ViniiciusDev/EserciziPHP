<?php
/* 
    TODO: Esercizio 11
    creare una funzione che prende in input questi 3 parametri nel seguente ordine: email, nome, cognome e restituisce un array che poi andrete a memorizzare in una variabile $user
*/

function registration($email, $nome, $cognome)  {
    $userRegister = [
        'Email' => $email,
        'Name' => $nome,
        'Surname' => $cognome,
    ];
    
    return $userRegister;
}

$user = registration('example@gmail.com', 'Vincenzo', 'Arsenio');

print_r($user);