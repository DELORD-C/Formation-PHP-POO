<?php

$bdd = new PDO('mysql:host=localhost;dbname=cannes', 'root', '');

$query = $bdd->prepare("SELECT * FROM films LIMIT 10");
$query->execute();
$films = $query->fetchAll(PDO::FETCH_ASSOC);
            
        foreach ($films as $key => $film) {
            $titreFormaté = str_replace(' ', '%20', $film['films_selectionnes_au_festival']);
            $url = 'https://api.themoviedb.org/3/search/movie?api_key=625b3e1220c0fca7c7ac7f6fcca786ac&language=fr-FR&query=' . $titreFormaté;
            $apiResult = json_decode(file_get_contents($url));
            if (!empty($apiResult->results)) {
                $filmApi = $apiResult->results[0]; ?>        
                <div class='film'>
                    <div></div>
                    <img src='https://www.themoviedb.org/t/p/w600_and_h900_bestv2<?=$filmApi->poster_path?>'>
                    <h2><?=$film['films_selectionnes_au_festival']?></h2>
                    <p><?=$film['realisateurs']?></p>
                    <p><?=$film['annee']?></p>
                </div>
            <?php }
        } ?>
    </tbody>
</table>