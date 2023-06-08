<?php
/* 
    TODO: Esercizio 8
    Vogliamo adesso limitare a 3 il numero massimo di corsi ai quali uno studente può essere iscritto, quindi:

        - creare, nella classe Student, una costante CLASSES_MAX che sarà uguale a 3;
        - modificare il metodo addClass, in modo che aggiunga un nuovo corso solo se non si è superato il limite di 3 (CLASSES_MAX), in caso contrario, se si prova aggiungere un nuovo elemento, stampare: Hai raggiunto il numero massimo di corsi.
    

    Suggerimenti: la funzione count($array) vi restituisce il numero di elementi attualmente presenti nell'array
*/

class Student
{
    // Costante
    const CLASSES_MAX = 3;

    // Proprietá(variabili).
    public $name;
    public $email;
    private $age;
    private $classes = [];

    // Funzione Costruttore.
    public function __construct($name, $email, $age)
    {
        $this -> name = $name;
        $this -> email = $email;
        $this -> age = $age;
    }
    // Metodo che valuta la fascia di età.
    private function getAge()
    {
        if($this -> age >= 18 && $this -> age <= 30)    {
            return '18 - 30';
        } else if ($this -> age > 30 && $this -> age <= 50)    {
            return '31 - 50';
        } else if ($this -> age > 50)   {
            return '50+';
        } else {
            return 'Sei minorenne';
        }
    }
    // Metodo che stampa la fascia di età.
    public function ageRange() 
    {
        echo "Lo studente si trova nella fascia di età: " . $this -> getAge();
    } 
    // Metodo che aggiunge i corsi all'array.
    public function addClass(...$classes)
    {
        $this -> classes = $classes;
        if (count($this -> classes) > self::CLASSES_MAX) {
            echo 'Hai raggiunto il numero massimo di corsi';
            die();
        }
    }
    // Metodo che cerca i corsi all'array
    public function printClasses(...$classes)
    {
        echo "Lo studente " . $this -> name . " segue i corsi: ";
        foreach ($this -> classes as $corsi) {
            echo $corsi . "\n";
        }
    }

}

$studente1 = new Student('Vinicius', 'vinicius@example.com', 24);
$studente2 = new Student('Massimiliano', 'massimiliano@example.com', 28);
$studente3 = new Student('Francesco', 'francesco@example.com', 52);
$studente4 = new Student('Rocco', 'rocco@example.com', 12);

$studente2 -> addClass('JS', 'PHP', 'CSS', 'HTML');

$studente2 -> printClasses();