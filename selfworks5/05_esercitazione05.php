<?php
/* 
    TODO: Esercizio 5
    Adesso dobbiamo modificare la classe GrandeDistribuzione, in modo che l'elenco delle sedi non contenga più solamente le singole città, ma tutti i seguenti dati per ogni sede: città, email, telefono, fatturato.
    Suggerimento: quello che vogliamo modificare è il singolo elemento dell'elenco sedi. L’elemento da essere una semplice stringa, diventa un array associativo contenente i vari campi: città, email, telefono, fatturato.
    Riflettete: per come abbiamo scritto la classe, è realmente necessaria una modifica? O va già bene scritta così? Cosa cambia in realtà?
*/

// * Class Parent
class Client    {

    // Proprietá
    public $name;
    public $city;
    public $annualSales;
    public $manager;

    // Metodo Costruttore
    public function __construct($name, $city, $annualSales, $manager)
    {
        $this -> name = $name;
        $this -> city = $city;
        $this -> annualSales = $annualSales;
        $this -> manager = $manager;
    }
}

// * Extend parent child Store

class Store extends Client  {
    
    // Proprietá
    public $phone;
    public $email;
    const TYPE = "Store";

    // Metodo Costruttore
    public function __construct($name, $city, $annualSales, $manager, $phone, $email)
    {
        parent::__construct($name, $city, $annualSales, $manager);

        $this -> phone = $phone;
        $this -> email = $email;
    }
}

// * Extend parent child Department Store

class DepartmentStore extends Client    {

    // proprietá
    public $storeLocation = [];
    const TYPE = "DepartmentStore";

    // Metodo Costruttore
    public function __construct($name, $city, $annualSales, $manager, $phone, $email)
    {
        parent::__construct($name, $city, $annualSales, $manager, $phone, $email);

    }

    // Metodo per Aggiungere Store Location
    public function addStoreLocation($newStoreLocation, $emailLocation, $phoneLocation, $annualSalesLocation)
    {
        $this -> storeLocation[$newStoreLocation] = [
            "City" => $newStoreLocation, 
            "Email" => $emailLocation,
            "Phone" => $phoneLocation,
            "Annual Sales" => $annualSalesLocation
        ];
    }

}

$departmentStore = new DepartmentStore('Center Cell', 'Roma', 200000, 'Alberto', 123456789, 'alberto@example.com');

$departmentStore -> addStoreLocation('Napoli', 'storeNapoli@example.com', 132456789, 150000);
$departmentStore -> addStoreLocation('Catania', 'storeCatania@example.com', 142356789, 250000);

print_r($departmentStore);