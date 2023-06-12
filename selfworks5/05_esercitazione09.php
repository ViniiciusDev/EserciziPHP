<?php
/* 
    TODO:  Esercizio 9 - Extra
    Modificare il metodo all'esercizio 7 in modo che sommi tutti i fatturati presenti nell'elenco delle sedi e ne stampi il risultato in questo modo: "Il fatturato totale di nome_della_grande_distribuzione è valore_del_fatturato". 
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
    public $totalSales;
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
            "AnnualSales" => $annualSalesLocation
        ];
    }

    public function getAnnualSales()
    {
        foreach ($this -> storeLocation as $AnnualSales => $allSales) {
            $this -> totalSales += $allSales["AnnualSales"];
        }
        return $this -> totalSales;
    }

}

$store1 = new Store('Central Store', 'Milano', 250000, 'Pino', '123456989', 'questo@example.com');
$departmentStore = new DepartmentStore('Center Cell', 'Roma', 200000, 'Alberto', 123456789, 'alberto@example.com');

$departmentStore -> addStoreLocation('Napoli', 'storeNapoli@example.com', 132456789, 150000);
$departmentStore -> addStoreLocation('Catania', 'storeCatania@example.com', 142356789, 250000);
$departmentStore -> addStoreLocation('Crotone', 'storeCrotone@example.com', 142356789, 120000);

$departmentStore -> getAnnualSales();

echo "Il fatturato totale di " . $departmentStore -> name . " è di $" . $departmentStore -> totalSales;