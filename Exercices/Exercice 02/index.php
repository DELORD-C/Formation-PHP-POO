<?php

$bdd = new PDO('mysql:host=localhost;dbname=ex2', 'root', '');
session_start();

if (!empty($_GET['dc']) && $_GET['dc'] == 'true') {
    session_destroy();
    session_start();
}

if (!empty($_SESSION['connected'])) {
    echo "<a href='" . $_SESSION['facebook'] . "'>Facebook</a>";
    echo "<a href='?dc=true'>Deconnexion</a>";
} else {
    if (!empty($_POST)) {
        $query = $bdd->prepare("SELECT * FROM users WHERE pseudo = ?");
        $query->bindParam(1, $_POST['pseudo']);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if ($result['password'] == $_POST['password']) {
            $_SESSION['connected'] = true;
            $_SESSION['facebook'] = $result['facebook'];
        }
        header('Refresh:O; url=/Formation-PHP-POO/Exercices/Exercice%2002');
    }
    else {
        include("formulaire.html");
    }
}