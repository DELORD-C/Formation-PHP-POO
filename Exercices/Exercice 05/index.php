<?php

include('adresse.php');
include('personne.php');
include('listePersonnes.php');

$adresse1 = new Adresse ('1 Chemin du test', 'Paris', '91000');
$adresse2 = new Adresse ('2 Chemin du test', 'Lyon', '69000');
$adresse3 = new Adresse ('3 Chemin du test', 'Nantes', '45000');
$adresse4 = new Adresse ('4 Chemin du test', 'Toulouse', '12000');
$adresse5 = new Adresse ('5 Chemin du test', 'Marseille', '25000');
$adresse6 = new Adresse ('6 Chemin du test', 'Marseille', '25000');

$personne1 = new Personne ('Georges', 'M', [$adresse1, $adresse2, $adresse5]);
$personne2 = new Personne ('Amélie', 'F', [$adresse3, $adresse4, $adresse5, $adresse6]);

$liste = new ListePersonnes([$personne1, $personne2]);

$liste->editPersonneVille('Marseille', 'Dijon');
$result = $liste;

echo '<pre>';
var_dump($result);
echo '</pre>';