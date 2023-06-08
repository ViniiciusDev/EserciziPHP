<?php
/* 
    TODO: 

    Esercizio 5
    Vogliamo che il metodo getAge non stampi direttamente l'età dello studente ma la fascia di appartenenza come di seguito, utilizzando echo:

        - '18 - 30' se l’età è compresa tra 18 e 30
        -  '31 - 50', se l’età è compresa tra 31 e 50
        -  ‘50+'. se l’età è maggiore di 50

    Apportare quindi le opportune modifiche al metodo.
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
        if($this -> age >= 18 && $this -> age <= 30)    {
            echo '18 - 30';
        } else if ($this -> age > 30 && $this -> age <= 50)    {
            echo '31 - 50';
        } else if ($this -> age > 50)   {
            echo '50+';
        } else {
            echo 'Sei minorenne';
        }
    }

}

$studente1 = new Student('Vinicius', 'vinicius@example.com', 24);
$studente2 = new Student('Massimiliano', 'massimiliano@example.com', 28);
$studente3 = new Student('Francesco', 'francesco@example.com', 52);
$studente4 = new Student('Rocco', 'rocco@example.com', 12);

$studente3 -> getAge();