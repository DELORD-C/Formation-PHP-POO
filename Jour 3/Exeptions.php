<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    $pdo = new PDO('mysql:host=localhost;dbname=formationphp', 'root', 'aze');
}
catch (Exception $erreur) {
    // echo '<span>' . $erreur . '</span>';
}

// echo 'Terminé';

function inverse (int $nbr) {
    if ($nbr == 0) {
        throw new Exception('Division par zéro impossible.'); //throw permet d'envoyer une nouvelle esception avec le texte de notre choix
    }
    return 1/$nbr;
}

try { //try/catch permet d'essayer une ou plusieurs instructions en évitant que les évetuelles exceptions no bloquent le script.
    inverse(0);
}
catch (Exception $e) {
    echo '<span>' . $e . '</span>';
}