<?php

Abstract class Vehicule {
    private $nom;
    private $acceleration;
    private $freinage;
    private $marque;
    private $vitesse = 0;

    function __construct (string $nom, int $acceleration, int $freinage, string $marque)
    {
        $this->nom = $nom;
        $this->acceleration = $acceleration;
        $this->freinage = $freinage;
        $this->marque = $marque;
    }

    function getNom () {
        return $this->nom;
    }

    function setNom (string $nom) {
        $this->nom = $nom;
    }

    function getAcceleration () {
        return $this->acceleration;
    }

    function setAcceleration (int $acceleration) {
        $this->acceleration = $acceleration;
    }

    function getFreinage () {
        return $this->freinage;
    }

    function setFreinage (int $freinage) {
        $this->freinage = $freinage;
    }

    function getMarque () {
        return $this->marque;
    }

    function setMarque (string $marque) {
        $this->marque = $marque;
    }

    function accélérer () {
        $this->vitesse += $this->acceleration;
    }
}