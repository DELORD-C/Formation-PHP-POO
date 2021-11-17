<?php

class Auth {
    private $connection = false;
    private $email;
    private $pdo;

    function __construct()
    {
        session_start();
        if (!empty($_SESSION['connected']) && !empty($_SESSION['email'])) {
            $this->connection = true;
            $this->email = $_SESSION['email'];
        }
        $this->pdo = new PDO('mysql:host=localhost;dbname=formationphp', 'root', '');
    }

    function isConnected() {
        return $this->connection;
    }

    function checkPassword($email, $password) {
        $email = htmlspecialchars($email);
        $password = htmlspecialchars($password);
        $query = $this->pdo->prepare("SELECT email, password FROM users WHERE email = ?");
        $query->bindParam(1, $email);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if (count($result) > 0 && $password == $result['password']) {
            $_SESSION['connected'] = true;
            $_SESSION['email'] = $_POST['email'];
        }
        else {
            $_SESSION['error'] = 'Mauvaise combinaison email / mot de passe';
        }
        header('location: /Formation-PHP-POO/Exercices/Exercice%2008/');
    }

    function displayError() {
        if (!empty($_SESSION['error'])) {
            echo '<p class="error">' . $_SESSION['error'] . '</p>';
            unset($_SESSION['error']);
        }
    }

    function checkDisconnect() {
        if (!empty($_GET['dc']) && $_GET['dc'] == 'true') {
            $this->disconnect();
        }
    }

    function disconnect() {
        session_destroy();
        header('location: /Formation-PHP-POO/Exercices/Exercice%2008/');
    }

    function getPDO () {
        return $this->pdo;
    }
}