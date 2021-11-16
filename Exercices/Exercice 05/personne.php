<?php

class Personne {
    private $nom;
    private $sexe;
    private $adresses;

    function __construct(string $nom, string $sexe, array $adresses)
    {
        if ($sexe == 'M' || $sexe == 'F') {
            $this->sexe = $sexe;
            $this->nom = $nom;
            $this->adresses = $adresses;
        }
        else {
            throw new Exception("'M' ou 'F' attendu en deuxième paramètre.");
        }
    }

    function setNom (string $nom) {
        $this->nom = $nom;
    }

    function getNom () {
        return $this->nom;
    }

    function setSexe (string $sexe) {
        $this->sexe = $sexe;
    }

    function getSexe () {
        return $this->sexe;
    }

    function setAdresses (array $adresses) {
        $this->adresses = $adresses;
    }

    function getAdresses () {
        return $this->adresses;
    }
}