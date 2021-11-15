# Exercice 4

## Considérons une classe appelée Stagiaire ayant les attributs suivants :
- ```$nom``` : un attribut privé de type chaîne de caractère
- ```$notes``` : un attribut privé de type tableau de réels

1. Créez la classe Stagiaire
2. Créez ou générez les getters et setters des deux attributs.
3. Définissez un constructeur avec deux paramètres Stagiaire(string $nom, array $notes)
4. Ecrivez la méthode calculerMoyenne() qui permet de retourner la moyenne des notes d’un stagiaire
5. Ecrivez les méthodes trouverMax() et trouverMin() qui permettent de retourner respectivement les notes max et min d’un stagiaire.

## Considérons maintenant une classe appelée Formation ayant les attributs suivants :
- ```$intitulé``` : un attribut privé de type chaîne de caractère
- ```$nbrJours``` : un attribut privé de type entier
- ```$stagiaires``` : un tableau d’objets de type Stagiaire
6. Créez la classe Formation, générez les getters et setters de ses attributs, et définissez le constructeur Formation(string $intitulé, int $nbrJours, array $stagiaires)
7. Ecrivez une méthode calculerMoyenneFormation() qui retourne la moyenne d’un objet de type formation (la moyenne des moyennes des stagiaires)
8. Ecrivez une méthode getIndexMax() qui retourne l’indice du stagiaire dans le tableau stagiaires ayant la meilleure moyenne de la formation.
9. Ecrivez une méthode afficherNomMax() qui affiche le nom du premier stagiaire ayant la meilleure moyenne d’une formation.
10. Ecrivez une méthode afficherMinMax() qui affiche la note minimale du premier stagiaire ayant la meilleure moyenne d’une formation.
11. Ecrivez une méthode trouverMoyenneParNom(string $nom) qui affiche la moyenne du premier stagiaire dont le nom est passé en paramètre.
12. Dans un fichier index.php, testez toutes les méthodes réalisées dans les questions précédentes (créez par example trois objets Stagiaire et affectez les à une même formation et faites appel aux quatre dernières méthodes que vous avez implémentées).