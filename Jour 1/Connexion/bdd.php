<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=formationphp', 'root', '');
} catch (PDOException $e) {
    var_dump($e);
}

function checkPassword ($email, $password, $bdd) {
    $query = $bdd->prepare("SELECT email, password FROM users WHERE email = ?");
    $query->bindParam(1, $email);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if ($password == $result['password']) {
        return true;
    }
    else {
        return false;
    }
}