<?php

include('bdd.php');
session_start();

if(!empty($_POST) && empty($_SESSION['connected'])) {
    if (checkPassword($_POST['email'], $_POST['password'], $bdd)) {
        $_SESSION['connected'] = true;
        $_SESSION['email'] = $_POST['email'];
        header('Refresh: 0; url=/Formation-PHP-POO/Jour%201/Connexion');
    }
}
else if (!empty($_SESSION['connected']) && !empty($_SESSION['email'])) {
    include('home.php');
}
else {
    include('connexion.html');
}