<?php
/* 
    TODO: Esercizio 11 - Extra
        Aggiungere, alla classe genitore:

        - una proprietà public static $counter che sarà incrementata di uno ad ogni chiamata del costruttore, ovvero, ogni volta che viene creato un oggetto;
        - un metodo public static numeroClienti che stampi "Il numero totale dei clienti è: " seguito dal valore di $counter
*/

// * Class Parent 
class Client    {

    // Proprietá
    public $name;
    public $city;
    private $annualSales;
    public $manager;
    public static $counter = 0;

    // Metodo Costruttore
    public function __construct($name, $city, $annualSales, $manager)
    {
        $this -> name = $name;
        $this -> city = $city;
        $this -> annualSales = $annualSales;
        $this -> manager = $manager;
        self::$counter++;
    }

    // Metodo per stampare annualSales.
    public function getAnnualSales()
    {
        echo $this -> annualSales;
    }

    // Metodo static per contare i client
    public static function clientCounter()
    {
        echo "Il numero totale dei clienti è: " . self::$counter;
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

    // Metodo per sommare il fatturado di tutti i negozi. 
    public function getAnnualSales()
    {
        foreach ($this -> storeLocation as $AnnualSales => $allSales) {
            $this -> totalSales += $allSales["AnnualSales"];
        }
        return $this -> totalSales;
    }
    
    // Metodo per rimuovere una store.
    public function removeStore($city)
    {
        if(array_key_exists($city, $this -> storeLocation)) {

            unset($this -> storeLocation[$city]);
            echo "deleted";
        
        } else {
        
            echo 'not_found';
        
        }
    }

}

$store1 = new Store('Central Store', 'Milano', 250000, 'Pino', '123456989', 'questo@example.com');
$departmentStore = new DepartmentStore('Center Cell', 'Roma', 200000, 'Alberto', 123456789, 'alberto@example.com');
$departmentStore = new DepartmentStore('Center Cell', 'Milano', 200000, 'Alberto', 123456789, 'alberto@example.com');
$departmentStore = new DepartmentStore('Center Cell', 'Genova', 200000, 'Alberto', 123456789, 'alberto@example.com');

$departmentStore -> addStoreLocation('Napoli', 'storeNapoli@example.com', 132456789, 150000);
$departmentStore -> addStoreLocation('Catania', 'storeCatania@example.com', 142356789, 250000);
$departmentStore -> addStoreLocation('Crotone', 'storeCrotone@example.com', 142356789, 120000);

Client::clientCounter();