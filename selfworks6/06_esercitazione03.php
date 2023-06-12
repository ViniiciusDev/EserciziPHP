<?php
/* 
    TODO: Esercizio 3
    Creare una classe Auto che estende la classe Veicolo
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

class Auto extends Vehicle  {
    public function __construct($brand, $model)
    {
        parent::__construct($brand, $model);
    }
}