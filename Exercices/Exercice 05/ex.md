# Exercice 5

## Considérons les deux classes Personne et Adresse.
### Les attributs de la classe Adresse sont :
- ```$rue``` : un attribut privé de type chaîne de caractères.
- ```$ville``` : un attribut privé de type chaîne de caractère.
- ```$codePostal``` : un attribut privé de type chaîne de caractère.
### Les attributs de la classe Personne sont :
- ```$nom``` : un attribut privé de type chaîne de caractère.
- ```$sexe``` : un attribut privé de type caractère (cet attribut aura comme valeur soit ’M’ soit ’F’).
- ```$adresses``` : un attribut privé de type tableau d’objet de la classe Adresse.

1. Créez les deux classes Adresse et Personne dans deux fichiers séparés. N’oubliez pas de
créer/générer les getters/setters et le(s) constructeur(s).
2. Créez une troisième classe ListePersonnes ayant un seul attribut $personnes : un tableau
de maximum 10 objets de la classe Personne. Générez les getters/setters et le constructeur de
cette classe.
1. Ecrivez la méthode ```findByNom(string $s)``` qui permet de chercher dans le tableau $personnes
si un objet dont le nom égal au paramètre s existe. Si c’est le cas, elle retourne le premier objet
correspondant, sinon null.
4. Ecrivez la méthode ```findByCodePostal(string $cp)``` qui permet de vérifier dans le tableau ```$personnes``` si un objet possède au moins une adresse dont le code postal égal au paramètre
```$cp```. Si c’est le cas, elle retourne true, sinon false.
5. Ecrivez la méthode ```countPersonneVille(string $ville)``` qui permet de calculer le nombre
d’objets dans le tableau ```$personnes``` ayant une adresse dans la ville passée en paramètre.
6. Ecrivez la méthode ```editPersonneNom(string $oldNom, string $newNom)``` qui remplace les
noms de personnes ayant un nom égal à la valeur ```$oldNom``` par ```$newNom```
7. Ecrivez la méthode ```editPersonneVille(string $nom, string $newVille)``` qui remplace les
villes de personnes ayant un nom égal à la valeur du paramètre ```$nom``` par ```$newVille```
8. Dans un fichier index.php, testez toutes les méthodes réalisées dans les questions précédentes.