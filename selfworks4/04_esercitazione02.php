<?php
/* 
    TODO: Esercizio 2
    Utilizzare la classe Student per creare 3 oggetti con nome di variabile e dati a piacere.
    Stampare attraverso "echo":

        - la proprietà name del primo oggetto;
        - la proprietà name del secondo oggetto;
        - la proprietà email del secondo oggetto;
        - la proprietà age del terzo oggetto.
*/

class Student
{
    // Proprietá(variabili)
    public $name;
    public $email;
    public $age;


    // Funzione Costruttore
    public function __construct($name, $email, $age)
    {
        $this -> name = $name;
        $this -> email = $email;
        $this -> age = $age;
    }
}

$studente1 = new Student('Vinicius', 'vinicius@example.com', 24);
$studente2 = new Student('Massimiliano', 'massimiliano@example.com', 28);
$studente3 = new Student('Francesco', 'francesco@example.com', 32);

echo $studente1 -> name . "\n";
echo $studente2 -> name . "\n";
echo $studente2 -> email . "\n";
echo $studente3 -> age . "\n"; 