<?php
/* 
    TODO: Esercizio 7
    Vogliamo che, richiamando il metodo appena scritto all'esercizio 6 da un oggetto di tipo GrandeDistribuzione, non venga visualizzato il valore, ma un messaggio: Dato attualmente non disponibile.
    Suggerimento: override del metodo.
*/

// * Class Parent 
class Client    {

    // Proprietá
    public $name;
    public $city;
    private $annualSales;
    public $manager;

    // Metodo Costruttore
    public function __construct($name, $city, $annualSales, $manager)
    {
        $this -> name = $name;
        $this -> city = $city;
        $this -> annualSales = $annualSales;
        $this -> manager = $manager;
    }

    // Metodo per stampare annualSales.
    public function getAnnualSales()
    {
        echo $this -> annualSales;
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

    public function getAnnualSales()
    {
        echo "Dato attualmente non disponibile";
    }

}

$store1 = new Store('Central Store', 'Milano', 250000, 'Pino', '123456989', 'questo@example.com');
$departmentStore = new DepartmentStore('Center Cell', 'Roma', 200000, 'Alberto', 123456789, 'alberto@example.com');

$departmentStore -> addStoreLocation('Napoli', 'storeNapoli@example.com', 132456789, 150000);
$departmentStore -> addStoreLocation('Catania', 'storeCatania@example.com', 142356789, 250000);

$departmentStore -> getAnnualSales();
echo "\n";
$store1 -> getAnnualSales();