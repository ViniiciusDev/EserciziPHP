<?php
/* 
    TODO: Esercizio 2
    Creare una classe Moto che estenda la classe Veicolo
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
}

class Moto extends Vehicle  {
    public function __construct($brand, $model)
    {
        parent::__construct($brand, $model);
    }
}









$ferrari = new Vehicle('Ferrari', 'California');
$fiat = new Vehicle('Fiat', 'Panda');
$Porsche = new Vehicle('Porsche', 'Porsche Cayane');

echo $ferrari -> startEngine();