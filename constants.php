<?php
  
    class VoorbeeldClass {
        const CONSTANT_GETAL = 10;
        public $normaalGetal;

        function toonNormaalGetal(){
            echo $this->normaalGetal;
        }

        function toonConstantGetal(){
            echo self::CONSTANT_GETAL;
        }
    }

    

    // $voorbeeld1 = new VoorbeeldClass();
    // $voorbeeld2 = new VoorbeeldClass();
    // $voorbeeld1->normaalGetal = 10;
    // $voorbeeld2->normaalGetal = 15;
    // echo $voorbeeld1->normaalGetal;
    // echo $voorbeeld2->normaalGetal;


    echo VoorbeeldClass::CONSTANT_GETAL; 
     

?>