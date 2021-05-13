<?php

class Meubel {
    private $priveVariabele;
    protected $protectedVariabele;
    public $publiekeVariabele;



    public $naam;
    public $prijs;

    function geefBeschrijving(){
        echo $this->naam . " " . $this->prijs;
    }

    final function leukeFunctie(){ //Deze function mag/kan niet overschreven worden in subclasses, omdat die final is
        echo "Dit is een final functie";
    }
}


class Tafel extends Meubel {
    public $houtsoort;
    public $kwaliteit;
    public $vorm;
    //.........

    function geefBeschrijving(){
        echo "Dit is een tafeltje super leuk";
    }
}

class Stoel extends Meubel {
    public $aantalPoten;
    public $houtsoort;
    public $extraVariabele;
    //.....
}

$meubel = new Meubel();
$meubel->naam = "Coole meubel";
$meubel->prijs = 10;
$meubel->geefBeschrijving();

$meubel->publiekeVariabele = "Hoi";
//$meubel->priveVariabele = "DOei"; Gaat fout, private variabele niet te benaderen

$tafel = new Tafel();
$tafel->naam = "Coole tafel";
$tafel->prijs = 20;
$tafel->houtsoort = "Eik";
$tafel->kwaliteit = "Zeer goed";
$tafel->vorm = "Rond";

//$tafel->priveVariabele = "hoi"; //Kan niet, want die heeft ie sowieso niet
$tafel->publiekeVariabele = "Hallo"; // Gaat goed;
//$tafel->protectedVariabele = "Gegroet"; // Kan niet. Protected is net als private, maar kan wel doorgegeven worden

$tafel->geefBeschrijving();
?>