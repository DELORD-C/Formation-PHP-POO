<?php

namespace General; //déclarer un namespace

class Personne { //déclare une classe
    //déclaration des attributs
    public $nom; //attribut publique : accessible par n'importe qui (classe elle même, utilisateur, classes enfantes)
    protected $age; //attribut protégé : accessible uniquement par les classes enfantes et la classe elle même
    private $sexe = 'Non définit'; //attribut privé : accessible uniquement par la classe elle même

    function __construct(string $nom, $age, $sexe) //déclarer une méthode :ici, la méthode de contruction;
    {
        $this->nom = $nom; // $this fait référence à l'objet actuel et donc on peut (re)définir ses attributs
                           // en utilisant $this->attribut
        $this->age = $age;
        $this->sexe = $sexe;
    }

    static function direBonjour () {
        echo 'Bonjour';
    }

    function __destruct() // fonction destruc se lance automatiquement à la destruction de l'objet
    {
        echo 'Terminé';
    }
}

$personne = new Personne('Eddy', 15, 'H');
$personne->nom = 26; //modification d'un attribut publique
Personne::direBonjour();
$personne->direBonjour();