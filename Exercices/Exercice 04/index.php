<?php

class Stagiaire {
    private $nom;
    private $notes;

    function __construct(string $nom, array $notes)
    {
        $this->nom = $nom;
        $this->notes = $notes;
    }

	function getNom() { 
 		return $this->nom; 
	} 

	function setNom($nom) {  
		$this->nom = $nom; 
	}

    function getNotes() { 
        return $this->notes; 
    } 

    function setNotes($notes) {  
        $this->notes = $notes; 
    } 

    function calculerMoyenne() {
        $total = 0;
        foreach ($this->notes as $key => $note) {
            $total += $note;
        }
        return $total / count($this->notes);
    }

    function trouverMax() {
        $max = 0;
        foreach ($this->notes as $key => $note) {
            if ($note > $max) {
                // $max = $this->notes[$key];
                $max = $note;
            }
        }
        return $max;
    }

    function trouverMin() {
        $min = null;
        foreach ($this->notes as $key => $note) {
            if (empty($min) || $note < $min) {
                $min = $note;
            }
        }
        return $min;
    }
}

class Formation {
    private $intitulé;
    private $nbrJours;
    public $stagiaires;

    function __construct(string $intitule, int $nbrJours, array $stagiaires)
    {
        $this->intitulé = $intitule;
        $this->nbrJours = $nbrJours;
        $this->stagiaires = $stagiaires;
    }

    function setIntitulé ($intitule) {
        $this->intitulé = $intitule;
    }

    function setNbrJours ($nbrJours) {
        $this->nbrJours = $nbrJours;
    }

    function setStagiaires ($stagiaires) {
        $this->stagiaires = $stagiaires;
    }

    function getIntitulé () {
        return $this->intitulé;
    }

    function getNbrJours () {
        return $this->nbrJours;
    }

    function getStagiaires () {
        return $this->stagiaires;
    }

    function calculerMoyenneFormation() {
        $total = 0;
        foreach ($this->stagiaires as $key => $stagiaire) {
            $total += $stagiaire->calculerMoyenne();
        }
        return $total / count($this->stagiaires);
    }

    function getIndexMax() {
        $index = null;
        $max = null;
        foreach ($this->stagiaires as $key => $stagiaire) {
            if ($max == null || $stagiaire->calculerMoyenne() > $max->calculerMoyenne()) {
                $index = $key;
                $max = $stagiaire;
            }
        }
        return $index;
    }

    function afficherNomMax() {
        $max = null;
        foreach ($this->stagiaires as $key => $stagiaire) {
            if ($max == null || $stagiaire->calculerMoyenne() > $max->calculerMoyenne()) {
                $max = $stagiaire;
            }
        }
        return $max->getNom();
    }

    function afficherMinMax() {
        $max = null;
        foreach ($this->stagiaires as $key => $stagiaire) {
            if ($max == null || $stagiaire->calculerMoyenne() > $max->calculerMoyenne()) {
                $max = $stagiaire;
            }
        }
        return $max->trouverMin();
    }

    function trouverMoyenneParNom($nom) {
        foreach ($this->stagiaires as $key => $stagiaire) {
            if ($stagiaire->getNom() == $nom) {
                return $stagiaire->calculerMoyenne();
            }
        }
    }
}




$stagiaire1 = new Stagiaire('David', [13, 16, 17, 8, 17]);
$stagiaire2 = new Stagiaire('Florian', [8, 6, 5, 8, 19]);
$stagiaire3 = new Stagiaire('Jeremy', [8, 6, 5, 8, 2]);
$stagiaire4 = new Stagiaire('Tim', [8, 6, 15, 8, 18]);
$formation = new Formation('PHP', 5, [$stagiaire1, $stagiaire2, $stagiaire3, $stagiaire4]);
echo '<pre>';
echo $formation->calculerMoyenneFormation();