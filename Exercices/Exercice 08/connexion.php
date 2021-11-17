<?php

if (isset($auth)) { ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleLogin.css">
</head>
<body>
    <?php $auth->displayError(); ?>
    <form action="" method="POST">
        <input name='email' type="text" placeholder="email">
        <input name='password' type="password">
        <input type="submit" value="Connexion">
    </form>
</body>
</html>
<?php }
else {
    header('location: /Formation-PHP-POO/Exercices/Exercice%2008/');
}