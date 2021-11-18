<?php

require('class/Autoloader.php');

$avion = new Avion ('Avion', 5, 50, 'Boeing');
$bateau = new Bateau ('Bateau', 5, 3, 'Costa');
$helico = new Helicoptère ('Helico', 50, 20, 'Helis');
$moto = new Moto ('Moto', 30, 30, 'Suzuki');
$voiture = new Voiture ('Voiture', 20, 20, 'Mercedes', 5);

$avion->accélérer();
$avion->accélérer();
echo $avion->getVitesse();
echo '<br/>';
echo $bateau->coule();
echo '<br/>';
echo $helico->crash();
echo '<br/>';
echo $moto->wheeling();
$moto->accélérer();
echo $moto->wheeling();
echo '<br/>';
echo $voiture->getNbPortes();