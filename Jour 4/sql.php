<?php

function dump($var) { // Se servir des fonctions pour factoriser un code qu'on utilise souvent.
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

$pdo = new PDO('mysql:host=localhost;dbname=formationphp', 'root', '');
$recherche = 'aimés';
// $requete = $pdo->prepare("SELECT * FROM films WHERE films_selectionnes_au_festival LIKE '%" . $recherche . "%'");
// LIKE permet de reproduire le comportement d'expression regulieres (regexp) pour par exemple rechercher un mot dans une chaîne de caractères.

// $requete = $pdo->prepare("SELECT * FROM films WHERE films_selectionnes_au_festival IN ('Azur et Asmar', 'Bird People')");
//IN permet de vérifier si une valeur est présent dans un tableau (une liste)

// $requete = $pdo->prepare("SELECT * FROM films WHERE annee BETWEEN '2010' AND '2012' ORDER BY annee ASC, films_selectionnes_au_festival ASC");
// BETWEEN permet de récupérer toutes les valeurs comprises entre tel et tel valeur
// ORDER BY permet de trier nos résultats

// $requete = $pdo->prepare("SELECT * FROM films WHERE annee NOT BETWEEN '2010' AND '2012' LIMIT 10");
// NOT permet d'inverser une condition
// LIMIT permet de limiter le nombre de résultats

// $requete = $pdo->prepare("INSERT INTO films VALUES ('Fast and Furious', 'Guy Guy', 'Ajout Manuel', 'Aucun prix', '2015')");
// INSERT INTO table VALUES (valeur1, valeur2, ...) sert à insérer des lignes dans une table

// $requete = $pdo->prepare("DELETE FROM films WHERE films_selectionnes_au_festival = 'Fast and Furious'");
// DELETE FROM table WHERE condition /// sert à supprimer des lignes dans une table

$requete->execute();
$resultat = $requete->fetchAll(PDO::FETCH_ASSOC);

dump($resultat);