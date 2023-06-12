<?php
/* 
    TODO:   Esercizio 4
    Creare un metodo abstract stampaCaratteristiche nella classe Veicolo ed implementarlo nelle classi Moto e Auto:

        - in Moto deve stampare: "Sono una moto marca e modello"
        - in Auto deve stampare: "Sono un auto marca e modello"
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

$ferrari = new Auto('Ferrari', 'California');
$BMW = new Moto('BMW', 'R1250');

$BMW -> printCharacteristics();