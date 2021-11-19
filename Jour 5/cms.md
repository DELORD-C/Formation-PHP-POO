# Création d'un CMS

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

Bonus :
   - S'assure que seul l'auteur de l'article puisse le modifier.
   - Créer des rôles (Administrateur, Createur, Visiteur) qu'on applique aux users (créer une nouvelle colonne dans la abse de donnée) puis s'assurer que notre site respecte les règles suivantes :
     - Les administrateurs ont tous les droits, même de supprimer ou modifier des articles qui ne leur appartiennent pas
     - Les créateurs peuvent créer des articles, modifier ou supprimer leurs articles
     - Les visiteurs peuvent uniquement visionner des articles
