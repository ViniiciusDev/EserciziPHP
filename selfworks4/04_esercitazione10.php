<?php
/* 
    TODO: Esercizio 10
    Modificare la proprietà statica $students appena creata, da public a private ed in seguito creare un metodo statico che ci servirà per stampare $students. Testare il metodo statico appena creato, chiamandolo direttamente dalla classe Student (e non dall'oggetto).
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
    private static $students = 0;

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
    // Metodo statico per stampare $students
    public static function counterStudents()
    {
        echo self::$students++;
    }

}

$studente1 = new Student('Vinicius', 'vinicius@example.com', 24);
$studente2 = new Student('Massimiliano', 'massimiliano@example.com', 28);
$studente3 = new Student('Francesco', 'francesco@example.com', 52);
$studente4 = new Student('Rocco', 'rocco@example.com', 12);
$studente5 = new Student('Alberto', 'alberto@example.com', 22);
$studente5 = new Student('Antonio', 'antonio@example.com', 28);

echo Student::counterStudents();