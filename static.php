<?php

class MijnCooleClass {
    function zegHallo(){
        echo "Hallo!";
    }

    static function zegDoei(){
        echo "Doei!";
    }
}

class Student {
    function toonCijferLijst(){

    }
}

//  $mijnCooleObject = new MijnCooleClass();
//  $mijnCooleObject->zegHallo();
    MijnCooleClass::zegDoei();

    class Rekenmachine {

        static $pi = 3.14;

        static function berekenSom($getal1, $getal2){
            echo $getal1 + $getal2;
        }
    }

?>