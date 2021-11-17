<?php

include('Vehicule/voiture.php');
include('general.php');

use Vehicule\Voiture as Alias;

Vehicule\Voiture::vroum();
Alias::vroum();
$voiture = new Alias ();


Generale::test();
Generale::bonjour();
// Generale::sePresenter(); // ne fonctionnera pas car on utilise $this dans la méthode sePresenter()


function dump($var) { // Se servir des fonctions pour factoriser un code qu'on utilise souvent.
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

dump($voiture);