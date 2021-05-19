<?php

abstract class Meubel {
    private $priveVariabele;
    protected $protectedVariabele;
    public $publiekeVariabele;



    public $naam;
    public $prijs;

    //abstract function abstracteFunctieNaam();

    abstract function geefBeschrijving() ;

    final function leukeFunctie(){ //Deze function mag/kan niet overschreven worden in subclasses, omdat die final is
        echo "Dit is een final functie";
    }
}


class Tafel extends Meubel {
    public $houtsoort;
    public $kwaliteit;
    public $vorm;
    //.........

    public function geefBeschrijving()
    {
        echo "Dit is een coole tafel";
    }

  
}

class Houtwerk {
    
}

trait HoutwerkTrait {
    function geefHoutnaam(){
        echo "Ik ben van eik!";
    }
}

trait MeubelTrait{
    function geefBeschrijving() {
        echo "Ik ben een meubel!";
    }
}

class Stoel extends Meubel {
    use HoutwerkTrait, MeubelTrait;

    public $aantalPoten;
    public $houtsoort;
    public $extraVariabele;
    //.....

    function geefBeschrijving()
    {
        echo "Hallo dit is mijn beschrijving";
    }
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
$tafel->geefBeschrijving();

$stoel = new Stoel();

//$tafel->priveVariabele = "hoi"; //Kan niet, want die heeft ie sowieso niet
$tafel->publiekeVariabele = "Hallo"; // Gaat goed;
//$tafel->protectedVariabele = "Gegroet"; // Kan niet. Protected is net als private, maar kan wel doorgegeven worden

$tafel->geefBeschrijving();
?>