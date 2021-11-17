<?php

class Movies {
    private $dbMovies;

    function __construct($auth)
    {
        $this->getDbMovies($auth);
        $this->getAPIData();
    }

    function getDbMovies ($auth) {
        $bdd = $auth->getPDO();
        $query = $bdd->prepare("SELECT * FROM films LIMIT 10");
        $query->execute();
        $this->dbMovies = $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function getAPIData() {
        foreach ($this->dbMovies as $key => $film) {
            $titreFormaté = preg_replace('/\s+/', '%20', $film['films_selectionnes_au_festival']);
            $url = 'https://api.themoviedb.org/3/search/movie?api_key=625b3e1220c0fca7c7ac7f6fcca786ac&language=fr-FR&query=' . $titreFormaté;
            $apiResult = json_decode(file_get_contents($url));
            if (!empty($apiResult->results)) {      
                $this->dbMovies[$key]['api'] = $apiResult->results[0];
            }
        }
    }

    function displayMovies () {
        $return = '';
        foreach ($this->dbMovies as $key => $film) {
            $titreFormaté = preg_replace('/\s+/', '%20', $film['films_selectionnes_au_festival']);
            if (!empty($film['api'])) {      
                $return .= "
                <a class='film' href='?titre=" . $titreFormaté . "'>
                    <div></div>
                    <img src='https://www.themoviedb.org/t/p/w600_and_h900_bestv2" . $film['api']->poster_path . "'>
                    <h2>" . $film['films_selectionnes_au_festival'] . "</h2>
                    <p>" . $film['realisateurs'] . "</p>
                    <p>" . $film['annee'] . "</p>
                </a>";
            }
        }
        return $return;
    }

    function displayMovieDetails() {
        $titreFormaté = preg_replace('/\s+/', '%20', $_GET['titre']);
        $url = 'https://api.themoviedb.org/3/search/movie?api_key=625b3e1220c0fca7c7ac7f6fcca786ac&language=fr-FR&query=' . $titreFormaté;
        $result = json_decode(file_get_contents($url))->results[0];
        return "
        <h1>" . $_GET['titre'] . "</h1>
        <p>" . $result->overview . "</p>
        <a href='index.php'>Précédent</a>";
    }
}