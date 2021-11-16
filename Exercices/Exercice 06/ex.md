# Exercice 5

## Considérons les classes suivantes :
- `Vehicule` abstraite qui a pour attributs :
  - `$nom` privé de type string
  - `$acceleration` privé de type int
  - `$freinage` privé de type int
  - `$marque` privé de type string
  - `$vitesse` privé de type int qui a pour valeur de base 0
- `Moto` qui étend Vehicule
- `Voiture` qui étend Vehicule et qui a pour attributs :
  - `$nbPortes` privé de type int
  

1. Créer les 3 classes avec leurs constructeurs, setters et getters (ne pas inclure `$vitesse` dans `__construct()` et ne pas lui faire de setters/getters)
2. Ajouter une méthode `accélérer()` à `Vehicule` qui ajoute son `$acceleration` à sa `$vitesse`
3. Ajouter une méthode `wheeling()` à `Moto` qui retourne la phrase : "[NOM DU VEHICULE] lève sa roue avant !" seulement si la `$vitesse` est supérieure à 0
4. Essayer d'instancier une Voiture et une Moto et tester les méthodes.