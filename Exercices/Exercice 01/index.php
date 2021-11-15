<?php

// Ecrire une fonction qui prend un paramètre (Int), et
// qui retourne une chaine de caractères contenant X fois
// le nombre 8, X étant le paramètre de la fonction

// exemple :
// returnHuit(5)
// "88888"

function returnHuit ($nbr) {
    $chaine = '';
    for ($i=0; $i < $nbr; $i++) { 
        $chaine .= '8'; // même chose que : $chaine = $chaine . '8';
    }
    return $chaine;
}