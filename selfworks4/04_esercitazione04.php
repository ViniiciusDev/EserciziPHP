<?php
/* 
    TODO: Esercizio 4
    Adesso che non possiamo più accedere alla proprietà "dall'esterno" dell'oggetto, scriviamo un metodo chiamato "getAge" che stampi attraverso echo la proprietà age. Testarne il corretto funzionamento chiamando questo metodo a partire da un oggetto.
*/

class Student
{
    // Proprietá(variabili)
    public $name;
    public $email;
    private $age;


    // Funzione Costruttore
    public function __construct($name, $email, $age)
    {
        $this -> name = $name;
        $this -> email = $email;
        $this -> age = $age;
    }

    public function getAge()
    {
        echo $this -> age;
    }

}

$studente1 = new Student('Vinicius', 'vinicius@example.com', 24);
$studente2 = new Student('Massimiliano', 'massimiliano@example.com', 28);
$studente3 = new Student('Francesco', 'francesco@example.com', 32);

$studente3 -> getAge();