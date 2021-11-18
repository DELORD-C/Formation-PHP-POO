<?php

if (empty($_POST['search']) && empty($_GET['del'])) {
    header('location: index.php');
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

echo $films->displayResults($search);