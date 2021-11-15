# Exercice 2

1. Créez une page html dans laquelle cous stockerez un formulaire de connexion (pseudo, password, submit)
2. Créez une base de donnée dans laquelle vous créez une table qui contient les champs suivants :
    - id (clé primaire et auto incrémentation : cocher AI)
    - pseudo
    - password
    - facebook
3. Dans index.php, incluez le fichier html précédemment créé
4. Dans index.php, créer une connexion à la base de donnée en php (objet PDO)
5. Dans index.php, démarrer la session
6. Faire en sorte que :
    Si l'utilisateur est connecté (variables session renseignées) on affiche son lien facebook et un lien de déconnexion
    Sinon
        Si La variable POST n'est pas vide : on vérifie la combinaison mot de passe / pseudo
            Si la combinaison est bonne, on connecte l'utilisateur (variables session) puis on rafraichit la page
            Sinon On rafraichit juste la page
        Sinon On affiche le formulaire
## Aide
PDO : 
```php
$bdd = new PDO('mysql:host=localhost;dbname=[NOM BDD]', '[USER]', '[PASSWORD]')
```
Session :
```php
session_start();
session_destroy();
$_SESSION;
```
Rafraichissement :
```php
header('Refresh: 0; url=[URL]');
```
Requête Base de donnée :
```php
$query = $bdd->prepare("SELECT * FROM users WHERE email = ?");
$query->bindParam(1, $email);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);
```