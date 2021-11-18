<?php

if (empty($_POST['search']) && empty($_GET['del'])) {
    header('location: index.html');
}

require('class/Films.php');
$films = new Films();

if (!empty($_GET['del'])) {
    $films->delete($_GET['del']);
}

if (empty($_GET['del'])) {
    $search = $_POST['search'];
} else {
    $search = $_GET['search'];
}

$result = $films->getResult($search);
foreach ($result as $key => $film) {
    ?>
    <div>
        <h2><?=$film['films_selectionnes_au_festival']?></h2>
        <p><?=$film['annee']?></p>
        <a href="?del=<?=$film['films_selectionnes_au_festival']?>&search=<?=$search?>">Supprimer</a>
    </div>
    <?php
}