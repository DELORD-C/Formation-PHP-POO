<?php

if (empty($_GET['id'])) {
    header('location: index.php');
}

require('class/Films.php');
$films = new Films();

echo $films->displayDetails($_GET['id']);