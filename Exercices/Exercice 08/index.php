<?php

function dump($var) { // Se servir des fonctions pour factoriser un code qu'on utilise souvent.
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

include('Auth.php');
$auth = new Auth ();

if(!$auth->isConnected()) {
    if (empty($_POST)) {
        include('connexion.php');
    }
    else {
        $auth->checkPassword($_POST['email'], $_POST['password']);
    }
}
else {
    if (empty($_GET['titre'])) {
        include('home.php');
    }
    else {
        include('film.php');
    }
}