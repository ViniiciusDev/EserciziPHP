<?php
/* 
    TODO: Esercizio 9
    Creare una proprietà statica "public static $students = 0" che sarà incrementata ogni volta che viene creato un nuovo oggetto di tipo Student. Questo incremento lo facciamo nel costruttore, incrementando, appunto, di 1 la variabile $students. Dopo aver creato la proprietà, creare un numero di oggetti a piacere della classe Student e successivamente stampare, tramite echo, la proprietà statica $students
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

    //Counter Student.
    public static $students = 0;

    // Funzione Costruttore.
    public function __construct($name, $email, $age)
    {
        $this -> name = $name;
        $this -> email = $email;
        $this -> age = $age;
        self::$students++;
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
$studente5 = new Student('Alberto', 'alberto@example.com', 22);


echo Student::$students;
/* $studente2 -> addClass('JS', 'PHP', 'CSS', 'HTML');

$studente2 -> printClasses(); */