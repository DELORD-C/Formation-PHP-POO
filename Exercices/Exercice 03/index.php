<?php

class Voiture {
    public $marque;
    public $acceleration;
    public $vitesse = 0;

    function __construct($marque, $acceleration)
    {
        $this->marque = $marque;
        $this->acceleration = $acceleration;
    }

    function accelere() {
        $this->vitesse += $this->acceleration;
        echo $this->marque . " accelère jusqu'à " . $this->vitesse . "km/h<br/>";
    }
}

$voiture = new Voiture ('Mercedes', 20);
$voiture->accelere();