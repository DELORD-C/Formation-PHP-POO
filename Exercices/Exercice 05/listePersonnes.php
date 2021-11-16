<?php

class ListePersonnes {
    private $personnes;

    function __construct(array $personnes)
    {
        if (count($personnes) <= 10) {
            $this->personnes = $personnes;
        }
        else {
            throw new Exception("Trop d'entrées dans le tableau passé en paramètre (10 max).");
        }
    }
    
    function findByNom(string $s) {
        foreach ($this->personnes as $key => $personne) {
            if ($personne->getNom() == $s) {
                return $personne;
            }
        }
    }

    function findByCodePostal(string $cp) {
        foreach ($this->personnes as $key => $personne) {
            $adresses = $personne->getAdresses();
            foreach ($adresses as $k => $adresse) {
                if ($adresse->getCodePostal() == $cp) {
                    return $personne;
                }
            }
        }
    }

    function countPersonneVille (string $ville) {
        $compte = 0;
        foreach ($this->personnes as $key => $personne) {
            $adresses = $personne->getAdresses();
            foreach ($adresses as $k => $adresse) {
                if ($ville == $adresse->getVille()) {
                    $compte++;
                    break;
                }
            }
        }
        return $compte;
    }

    function editPersonneNom (string $oldNom, string $newNom) {
        foreach ($this->personnes as $key => $personne) {
            if ($personne->getNom() == $oldNom) {
                $personne->setNom($newNom);
            }
        }
    }

    function editPersonneVille (string $oldVille, string $newVille) {
        foreach ($this->personnes as $key => $personne) {
            $adresses = $personne->getAdresses();
            foreach ($adresses as $k => $adresse) {
                if ($oldVille == $adresse->getVille()) {
                    $adresse->setVille($newVille);
                }
            }
        }
    }
}