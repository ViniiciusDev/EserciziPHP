<?php
/* 
    TODO: Esercizio 6
    Modificare la visibilità del metodo getAge in modo che non sia più direttamente accessibile dall'oggetto (deve essere quindi private).
    Creare poi un nuovo metodo public "ageRange" che, utilizzando getAge, stampi: "Lo studente si trova nella fascia di età: " seguito dalla fascia di età ricavata da getAge.

    (!) Fate attenzione a modificare getAge in modo che, in questo caso, restituisca un valore attraverso "return" e non stampi più direttamente attraverso echo.
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

    public function ageRange() 
    {
        echo "Lo studente si trova nella fascia di età: " . $this -> getAge();
    } 

}

$studente1 = new Student('Vinicius', 'vinicius@example.com', 24);
$studente2 = new Student('Massimiliano', 'massimiliano@example.com', 28);
$studente3 = new Student('Francesco', 'francesco@example.com', 52);
$studente4 = new Student('Rocco', 'rocco@example.com', 12);

$studente4 -> ageRange();