<?php

$bdd = new PDO('mysql:host=localhost;dbname=cannes', 'root', '');

$query = $bdd->prepare("SELECT * FROM films");
$query->execute();
$films = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<table>
    <thead>
        <tr>
            <th>Image</th>
            <th>Film</th>
            <th>Réalisateur</th>
            <th>Année</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($films as $key => $film) {
            $titreFormaté = str_replace(' ', '%20', $film['films_selectionnes_au_festival']);
            $url = 'https://api.themoviedb.org/3/search/movie?api_key=625b3e1220c0fca7c7ac7f6fcca786ac&language=fr-FR&query=' . $titreFormaté;
            $apiResult = json_decode(file_get_contents($url));
            if (!empty($apiResult->results)) {
                $filmApi = $apiResult->results[0]; ?>        
                <tr>
                    <td><img src='https://www.themoviedb.org/t/p/w600_and_h900_bestv2<?=$filmApi->poster_path?>'></td>
                    <td><?=$film['films_selectionnes_au_festival']?></td>
                    <td><?=$film['realisateurs']?></td>
                    <td><?=$film['annee']?></td>
                </tr>
            <?php }
            else { ?>

                <tr>
                    <td>Pas de poster</td>
                    <td><?=$film['films_selectionnes_au_festival']?></td>
                    <td><?=$film['realisateurs']?></td>
                    <td><?=$film['annee']?></td>
                </tr>
            <?php }
        } ?>
    </tbody>
</table>