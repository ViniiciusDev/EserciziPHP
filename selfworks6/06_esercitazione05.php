<?php
/* 
    TODO: Esercizio 5
    Creare un Trait chiamato Movimenti che contenga questi due metodi:

    - public avanti() che stampa: "Mi sto muovendo in avanti"
    - public indietro() che stampa: "Mi sto muovendo indietro"
*/

abstract class Vehicle  {
    public $brand;
    public $model;

    public function __construct($brand, $model)
    {
        $this -> brand = $brand;
        $this -> model = $model;
    }

    // Metodo per Avviare il motore
    public function startEngine()
    {
        echo "Motore Avviato";
    }

    // Metodo per Spegnere il motore
    public function stopEngine()
    {
        echo "Motore Spento";
    }

    // Metodo Abstract stampaCaratteristiche
    abstract public function printCharacteristics();

    use Moviments;
}

class Moto extends Vehicle  {
    public function __construct($brand, $model)
    {
        parent::__construct($brand, $model);
    }

    public function printCharacteristics()
    {
        echo "Sono una moto " .  $this -> brand . " e " . $this -> model;
    }
}

class Auto extends Vehicle  {
    public function __construct($brand, $model)
    {
        parent::__construct($brand, $model);
    }

    public function printCharacteristics()
    {
        echo "Sono un auto " .  $this -> brand . " e " . $this -> model;
    }
}

trait Moviments {
    public function goAhead()
    {
        echo "Mi sto muovendo in avanti";
    }

    public function goBack()
    {
        echo "Mi sto muovendo indietro";
    }
}


$ferrari = new Auto('Ferrari', 'California');
$BMW = new Moto('BMW', 'R1250');

$BMW -> goAhead();
echo "\n";
$BMW -> goBack();