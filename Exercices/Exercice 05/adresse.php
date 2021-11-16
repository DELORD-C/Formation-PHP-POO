<?php

class Adresse {
    private $rue;
    private $ville;
    private $codePostal;

    function __construct(string $rue, string $ville, string $codePostal)
    {
        $this->rue = $rue;
        $this->ville = $ville;
        $this->codePostal = $codePostal;
    }

    function setRue (string $rue) {
        $this->rue = $rue;
    }

    function getRue () {
        return $this->rue;
    }

    function setVille (string $ville) {
        $this->ville = $ville;
    }

    function getVille () {
        return $this->ville;
    }

    function setCodePostal (string $codePostal) {
        $this->codePostal = $codePostal;
    }

    function getCodePostal () {
        return $this->codePostal;
    }
}