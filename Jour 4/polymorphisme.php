<?php

class Vehicule {
    function accelerer () {
        echo 'Vroum !';
    }
}

class Voiture extends Vehicule {
    
}

//Polymorphisme = créer un comportement commun entre divers types d'objets,
//avec attributs et méthodes du même nom par exemple.