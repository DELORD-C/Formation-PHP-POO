<?php

//crypter une chaine de caractères

use Voiture as GlobalVoiture;

$str = 'password';
$cryptedStr = md5($str);
$shaStr = sha1($str);


//Factory en POO
class Voiture {
    function vroum () {
        echo 'vroum !';
    }
}

// class Factory {
//     static function createVoiture () {
//         return new Voiture ();
//     }

//     static function createLotsOfCars () {
//         $result = [];
//         for ($i=0; $i < 800; $i++) { 
//             array_push($result, new Voiture());
//         }
//         return $result;
//     }
// }

// $voitures = Factory::createLotsOfCars();