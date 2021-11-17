<?php if (isset($auth)) {
    include('movies.php');
    $movies = new Movies($auth);
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
    <?=$movies->displayMovieDetails()?>
</body>
</html>
<?php }
else {
    header('location: /Formation-PHP-POO/Exercices/Exercice%2008/');
}