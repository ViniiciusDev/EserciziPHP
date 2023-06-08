<?php
/* 
    TODO: Esercizio 3
    Modificare la classe Student. In particolare la visibilità della proprietà age deve essere modificata da public a private.
    Provare a stampare la proprietà age di uno dei 3 oggetti creati precedentemente. (In questo caso dovreste ricevere un errore).
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
        /* $this -> age = $age; */
    }

    // Funzione Privata 
    private function privateAge()
    {
        $this -> age = $age;
    }
}

$studente1 = new Student('Vinicius', 'vinicius@example.com', 24);
$studente2 = new Student('Massimiliano', 'massimiliano@example.com', 28);
$studente3 = new Student('Francesco', 'francesco@example.com', 32);

echo $studente1 -> privateAge($studente1);