<?php
/* 
    TODO: Esercizio 7
    A questo punto vogliamo associare ad ogni studente un elenco di corsi ai quali partecipa, per fare questo dobbiamo:

        - aggiungere una proprietà private $classes alla classe Student dove $classes è un array vuoto, in questo array andremo ad inserire tutti i corsi seguiti dallo studente;
        - aggiungere un metodo "addClass" a Student che permetta di aggiungere un nuovo corso all'array $classes.
        - aggiungere un metodo "printClasses" che stampi: "Lo studente nome_dello_studente segue i corsi: e qui l'elenco di tutti i corsi, separati da virgola oppure da a capo";
*/

class Student
{
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

$studente2 -> addClass('JS', 'PHP', 'CSS');

$studente2 -> printClasses();