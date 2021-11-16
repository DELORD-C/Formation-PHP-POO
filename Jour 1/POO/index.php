<?php

class Personnage
{
    private $vie;
    public $attaque;
    public $nom;

    function __construct($vie, $attaque, $nom)
    {
        $this->vie = $vie;
        $this->attaque = $attaque;
        $this->nom = $nom;
    }

    function attaquer ($cible) {
        $vieActuelle = $cible->getVie();
        $cible->setVie($vieActuelle - $this->attaque);
        echo $this->nom . " attaque " . $cible->nom . '<br/>';
        echo $vieActuelle . " - " . $this->attaque . " = " . $cible->getVie() . '<br/>';
    }

    function getVie () {
        return $this->vie;
    }

    function setVie ($vie) {
        $this->vie = $vie;
    }
}

$perso1 = new Personnage(20, 6, 'Shrek');
$perso2 = new Personnage(40, 3, 'Dragon');

$perso1->attaquer($perso2);
$perso1->attaquer($perso2);