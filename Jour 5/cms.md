1. Créer une base de donnée "cms" dans laquelle on créé 2 tables :
   - users
     - id
     - username
     - password
   - article
     - id
     - title
     - content
     - author
2. Reprendre l'exercice 08 pour créer une page de connexion et une page qui s'affiche lorsque l'on est connecté.

3. Sur la page affichée lorsqu'on est connecté :
   - Afficher la liste des articles avec 3 liens d'action par article :
     - Voir (article.php?id=[id de l'article])
     - Modifier (edit.php?id=[id de l'article])
     - Supprimer (delete.php?id=[id de l'article])
   - Un formulaire pour créer un article qui reprend les colonnes de la base de donnée

4. S'assurer que toutes les pages requiert la connexion avant de s'afficher et/ou de s'executer

