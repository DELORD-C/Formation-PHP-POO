<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Recherche</title>
</head>
<body>
    <form action="recherche.php" method="post" class='recherche'>
        <input name='search' type="text" placeholder="Recherche" id='search'>
        <input type="submit" value="Rechercher" id='submit-search'>
    </form>
    <form action="ajout.php" method="post" class='creation'>
        <input type="text" name='titre' placeholder="Titre">
        <input type="text" name='realisateurs' placeholder="Realisateur(s)">
        <input type="text" name='sections' placeholder="Sections">
        <input type="text" name='prix' placeholder="Prix obtenu(s)">
        <input type="number" name='annee' placeholder="Année" min='1900' max='2022'>
        <input type="submit" value='Créer'>
    </form>
    <?php if (!empty($_GET['info'])) { ?>
        <span><?=$_GET['info']?></span>
    <?php } ?>
    <div class='liste'>
        <?php
            include('class/Films.php');
            $films = new Films ();
            echo $films->displayTenLast();
        ?>
    </div>
</body>
</html>