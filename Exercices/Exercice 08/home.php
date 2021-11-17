<?php
include('movies.php');
$movies = new Movies($auth);
$render = $movies->displayMovies();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?=$render?>
    <form action="">
        <input type="hidden" value='true' name='dc'>
        <input type="submit" value="Deconnexion">
    </form>
    <script src="script.js"></script>
</body>
</html>

<?php $auth->checkDisconnect(); ?>