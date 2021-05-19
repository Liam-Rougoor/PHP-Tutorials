<?php

interface MijnCooleInterface {
    function functie1();
    function functie2();
    function functie3();
}

interface MijnTweedeInterface{}


class MijnCooleClass implements MijnCooleInterface, MijnTweedeInterface {
    function functie1(){
        echo "Wat een leuke functie 1";
    }

    function functie2(){
        echo "Wat een leuke functie 2";
    }

    function functie3(){
        echo "Wat is een leuke functie 3";
    }
}



?>