<?php
/* 
    TODO: Esercizio 1
    Creare una classe "abstract" chiamata Veicolo che abbia le seguenti proprietà:

        - marca
        - modello

    ed i seguenti metodi con visibilità pubblica:

        - avviaMotore() che stampa: "Motore avviato"
        - spegniMotore() che stampa: "Motore spento"

    I valori di marca e modello devono essere passati attraverso il costruttore.
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

$ferrari = new Vehicle('Ferrari', 'California');
$fiat = new Vehicle('Fiat', 'Panda');
$Porsche = new Vehicle('Porsche', 'Porsche Cayane');

echo $ferrari -> startEngine();