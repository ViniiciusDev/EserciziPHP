<?php
/* 
    TODO: Esercizio 1
    Un'azienda che produce smartphone ha due tipologie di clienti:

        - Negozio
        - Grande distribuzione

    Per meglio organizzare la consegna dei propri prodotti, realizza un software che gestisce i punti vendita e, più in dettaglio, le due tipologie di clienti sono così caratterizzate:

    Negozio (singola sede):

        - nome
        - città
        - fatturato annuo
        - nome del responsabile
        - telefono
        - email

        
    Grande distribuzione (con più sedi):

        - nome
        - città (della sede principale)
        - fatturato annuo
        - nome del responsabile
        - elenco delle sedi dei vari negozi (elemento singolo composto da solo il nome della città)

    Creare le relative classi, cercando di usare il concetto di ereditarietà sulle proprietà che sono in comune (magari partendo da una classe Cliente).
    Scrivere opportunamente il costruttore in modo che, ogni oggetto creato abbia almeno i seguenti dati: nome, città, fatturato annuo e nome del responsabile.
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

    // Metodo Costruttore
    public function __construct($name, $city, $annualSales, $manager, $phone, $email)
    {
        parent::__construct($name, $city, $annualSales, $manager);

        $this -> storeLocation[] = $storeLocation;
    }
}