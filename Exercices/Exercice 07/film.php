<?php

$titreFormaté = preg_replace('/\s+/', '%20', $_GET['titre']);
$url = 'https://api.themoviedb.org/3/search/movie?api_key=625b3e1220c0fca7c7ac7f6fcca786ac&language=fr-FR&query=' . $titreFormaté;
$apiResult = json_decode(file_get_contents($url))->results[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail <?=$_GET['titre']?></title>
</head>
<body>
    <h1><?=$_GET['titre']?></h1>
    <p><?=$apiResult->overview?></p>
    <a href='index.php'>Précédent</a>
</body>
</html>
