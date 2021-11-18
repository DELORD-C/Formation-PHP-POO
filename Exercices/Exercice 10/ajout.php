<?php

if (!empty($_POST)) {
    include('class/Films.php');
    $films = new Films ();
    if ($films->addFilm($_POST['titre'], $_POST['realisateurs'], $_POST['sections'], $_POST['prix'], $_POST['annee'])) {
        header('location: index.php?info=Votre film a bien été ajouté.');
    }
    else {
        header("location: index.php?info=Erreur lors de la création du film.");
    }
}

header("location: index.php");