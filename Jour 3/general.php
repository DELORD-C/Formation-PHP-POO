<?php

class Generale {
    private $nom;

    function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    static function test () {
        return 'test';
    }

    static function bonjour () {
        echo 'bonjour';
    }

    function sePresenter () {
        echo 'Bonjour, je suis ' . $this->nom;
    }
}