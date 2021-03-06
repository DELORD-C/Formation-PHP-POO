<?php

class Films {
    private $pdo;

    function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=formationphp', 'root', '');  
    }

    function displayResults ($search) {
        $search = trim(htmlspecialchars($search));
        $query = $this->pdo->prepare("SELECT * FROM films WHERE films_selectionnes_au_festival LIKE '%$search%'");
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        $return = '';
        foreach ($results as $key => $film) {
            $return .= "<a href='details.php?id=" . $film['id'] . "'>
                <h2>" . $film['films_selectionnes_au_festival'] . "</h2>
                <p>" . $film['annee'] . "</p>
                <a href='?del=" . $film['films_selectionnes_au_festival'] . "&search=" . $search . "'>Supprimer</a>
            </a>";
        }
        return $return;
    }

    function delete($titre) {
        $titre = trim(htmlspecialchars($titre));
        $query = $this->pdo->prepare("DELETE FROM films WHERE films_selectionnes_au_festival = ?");
        $query->bindParam(1, $titre);
        return $query->execute();
    }

    function addFilm ($titre, $realisateurs, $sections, $prix, $annee) {
        $query = $this->pdo->prepare("INSERT INTO films (films_selectionnes_au_festival, realisateurs, sections, prix_obtenu, annee) VALUES (?, ?, ?, ?, ?)");
        $query->bindParam(1, $titre);
        $query->bindParam(2, $realisateurs);
        $query->bindParam(3, $sections);
        $query->bindParam(4, $prix);
        $query->bindParam(5, $annee);
        return $query->execute();
    }

    function displayTenLast () {
        $query = $this->pdo->prepare("SELECT * FROM films ORDER BY id DESC LIMIT 10");
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        $return = '';
        foreach ($results as $key => $film) {
            $apiResult = $this->getApiDetails($film['films_selectionnes_au_festival']);
            if (empty($apiResult->results)) {
                $img = 'default.png';
            }
            else {
                $img = "https://www.themoviedb.org/t/p/w600_and_h900_bestv2" . $apiResult->results[0]->poster_path;
            }
            $return .= "
            <a href='details.php?id=" . $film['id'] . "' class='film'>
                <img src='$img'>
                <h2>" . $film['films_selectionnes_au_festival'] . "</h2>
            </a>
            ";
        }
        return $return;
    }

    function displayDetails ($id) {
        $film = $this->getDetails($id);
        $apiResult = $this->getApiDetails($film['films_selectionnes_au_festival']);
        if (empty($apiResult->results)) {
            header('location: index.php?info=Donn??es du film inconnues sur l\'API.');
        }
        return "
            <img src='https://www.themoviedb.org/t/p/w600_and_h900_bestv2" . $apiResult->results[0]->poster_path . "'>
            <p>" . $apiResult->results[0]->overview . "</p>
        ";
    }

    function getDetails ($id) {
        $query = $this->pdo->prepare("SELECT * FROM films WHERE id = ?");
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    function getApiDetails ($titre) {
        $titreFormat?? = preg_replace('/\s+/', '%20', $titre);
        $url = 'https://api.themoviedb.org/3/search/movie?api_key=625b3e1220c0fca7c7ac7f6fcca786ac&language=fr-FR&query=' . $titreFormat??;
        return json_decode(file_get_contents($url));
    }
}