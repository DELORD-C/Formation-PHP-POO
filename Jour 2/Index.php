<?php

class Voiture {
    private $modele;

    function __construct ($modele)
    {
        $this->modele = $modele;
        echo 'Début<br/>';
    }

    function vroum() {
        echo 'Vrooooouuuum !<br/>';
        return $this;
    }

    function crash() {
        echo $this->modele . " s'est crashé(e).<br/>";
    }

    function __destruct()
    {
        echo 'Fin<br/>';
    }
}

$voiture1 = new Voiture('Mercedes');
unset($voiture1);
$voiture2 = new Voiture('Mercedes');

$voiture2->vroum()->crash();
//défèrement : fait d'appeller plusieurs fonctions à la suite directement.

Abstract class Arme {
    function attaquer () {
        echo 'Attaque<br/>';
    }
}

class Epee extends Arme {
    private $metal;

    function __construct(int $degats, string $metal)
    {
        $this->degats = $degats;
        $this->metal = $metal;
    }
}

class Fusil extends Arme {
    private $munitions;

    function __construct(int $degats, int $munitions)
    {
        $this->degats = $degats;
        $this->munitions = $munitions;
    }

    function recharger (int $nbMun) {
        echo "Recharge avec " . $nbMun . " munitions.<br/>";
        $this->munitions += $nbMun;
    }
}

$eppe = new Epee (10, 'Argent');
$fusil = new Fusil (10, 10);


