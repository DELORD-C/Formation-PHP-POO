<p>Bonjour <?=$_SESSION['email']?></p>
<form action="">
    <input type="hidden" value='true' name='dc'>
    <input type="submit" value="Deconnexion">
</form>

<?php

if (!empty($_GET['dc']) && $_GET['dc'] == 'true') {
    session_destroy();
    header('Refresh: 0; url=/Formation-PHP-POO/Jour%201/Connexion');
}