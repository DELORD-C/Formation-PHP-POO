<?php

class Voiture extends Vehicule {
    private $nbPortes;

    function __construct (string $nom, int $acceleration, int $freinage, string $marque, int $nbPortes)
    {
        $this->nom = $nom;
        $this->acceleration = $acceleration;
        $this->freinage = $freinage;
        $this->marque = $marque;
        $this->nbPortes = $nbPortes;
    }

    function getNbPortes () {
        return $this->nbPortes;
    }

    function setNbPortes (string $nbPortes) {
        $this->nbPortes = $nbPortes;
    }
}