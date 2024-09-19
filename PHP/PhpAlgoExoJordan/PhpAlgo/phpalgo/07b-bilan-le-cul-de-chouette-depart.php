
<?php
//********************************
// Le jeu du cul de chouette
//********************************

// I/ Présentation
// ***************

// Le jeu du cul de chouette est un jeu de dés issu de l'univers de la série Kaamelott d'Alexandre Astier
// C'est, bien entendu, l'un des jeux préférés de Perceval.

// Le principe est, comme au Yams, de marquer des points en réussissant à créer des combinaisons avec ses dés.

// On lance 3 dés, et on peut obtenir les 5 combinaisons suivantes :

// "Chouette"           : 2 dés identiques
// "Cul de chouette"    : 3 dés identiques
// "Velute"             : 1 des trois dés est la somme des deux autres (ex : 6 4 2 ou 5 2 3)
// "Chouette velute"    : 2 dés identiques ET le troisième qui est la somme des deux autres (ex: 1 1 2, 2 2 4 ou 3 3 6)
// "La suite"           : suite de trois nombres (ex: 1 2 3, 2 3 4, ...)

// II/ Exercice
// ************

// Créez un programme qui :

// Tire au hazard 3 valeurs de dés entre 1 et 6 (utiliser rand()).

// Cherche si les dés forment une des cinq combinaisons ci-dessus

// Si oui, affiche quelle est la combinaison obtenue en criant "CHOUETTE !!!" ou "CHOUETTE VELUTE" ou autre...

// Demande au joueur si il veut relancer les dés.

// III/ Exercice bonus
// *******************

// Modifiez votre programme pour calculer les points remportés par chaque jet  en respectant le mode de calcul suivant :
// - Chouette : Carré de ce qui est affiché sur les dés (ex: chouette de 2 = 4 points, chouette de 3 = 9 points, ...)
// - Cul de chouette : entre 50 et 100 points comme suit
//      - de 2 : 50 points
//      - de 3 : 60 points
//      - de 4 : 70 points
//      - de 4 : 80 points
//      - de 5 : 90 points
//      - de 6 : 100 points
// - Velute : Double du carré du dés valant la somme des deux autres (ex : 1 3 4 => velut de 4 = 4*4*2 = 32). Donc :
//      - velute de 1 : impossible
//      - velute de 2 : 8
//      - velute de 3 : 18
//      - velute de 4 : 32
//      - velute de 5 : 50
//      - velute de 6 : 72
// - Chouette Velute : comme la velute
// - La suite : 10 points

