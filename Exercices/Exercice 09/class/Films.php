<?php

class Films {
    private $pdo;

    function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=formationphp', 'root', '');  
    }

    function getResult ($search) {
        $search = trim(htmlspecialchars($search));
        $query = $this->pdo->prepare("SELECT * FROM films WHERE films_selectionnes_au_festival LIKE '%$search%'");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function delete($titre) {
        $titre = trim(htmlspecialchars($titre));
        $query = $this->pdo->prepare("DELETE FROM films WHERE films_selectionnes_au_festival = ?");
        $query->bindParam(1, $titre);
        if ($query->execute()) {
            return true;
        }
        return false;        
    }
}