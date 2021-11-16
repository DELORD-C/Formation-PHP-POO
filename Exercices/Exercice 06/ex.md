# Exercice 6

## Considérons les classes suivantes :
- `Vehicule` abstraite qui a pour attributs :
  - `$nom` privé de type string
  - `$acceleration` privé de type int
  - `$freinage` privé de type int
  - `$marque` privé de type string
  - `$vitesse` privé de type int qui a pour valeur de base 0
- `VehiculeVolant` abstraite qui étend Vehicule
- `Moto` qui étend Vehicule
- `Bateau` qui étend Vehicule
- `Avion` qui étend VehiculeVolant
- `Helicoptère` qui étend VehiculeVolant
- `Voiture` qui étend Vehicule et qui a pour attributs :
  - `$nbPortes` privé de type int
  

1. Dans des fichiers différents, créer les classes avec leurs constructeurs, setters et getters (ne pas inclure `$vitesse` dans `__construct()` et ne pas lui faire de setters/getters)
2. Ajouter une méthode `accélérer()` à `Vehicule` qui ajoute son `$acceleration` à sa `$vitesse`
3. Ajouter une méthode `wheeling()` à `Moto` qui retourne la phrase : "[NOM DU VEHICULE] lève sa roue avant !" seulement si la `$vitesse` est supérieure à 0
4. Ajouter une méthode `crash()` à `VehiculeVolant` qui retourne la phrase :"[NOM DU VEHICULE] s'est crashé(e) !"
5. Ajouter une méthode `coule()`à `Bateau`qui retourne la phrase : [NOM DU VEHICULE] à coulé(e)"
6. Surcharger la méthode `accélérer()`dans `Avion` afin que celle-ci multiplie la `$vitesse` par `$acceleration`
7. Dans index.php, inclure les autres fichiers, instancier un véhicule de chaque type et tester les différentes  méthodes.