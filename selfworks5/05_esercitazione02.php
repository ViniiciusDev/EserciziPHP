<?php
/* 
    TODO: Esercizio 2
    Aggiungere una costante di classe che abbia valore ‘Negozio' oppure ‘Grande Distribuzione' per le rispettive classi. Provare a stamparne il valore.    
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
    public $storeLocation;
    const TYPE = "DepartmentStore";

    // Metodo Costruttore
    public function __construct($name, $city, $annualSales, $manager, $phone, $email)
    {
        parent::__construct($name, $city, $annualSales, $manager);

        $this -> storeLocation[] = $storeLocation;
    }
}

echo Store::TYPE;
echo "\n";
echo DepartmentStore::TYPE;