<?php

// Tableau de geeks
$geeks = [
    '#4eR{z24%à4$Fv9',
    'Hedy Lamar', 
    'FranAllen', 
    'Alexandra Illmer Forsythe', 
    'Tomoe Gozen',
    'Margaret Hamilton',
    'Grace Hopper',
];

// 1 / La première ligne du tableau n'a aucun sens, c'est sûrement un bug, il faut la retirer
$premier = array_shift($geeks);

// 2 / Il manque "Barbara Liskov" et "Sarita Schoenebeck" à la fin et "Ada Lovelace" au début
array_push($geeks, 'Barbara Liskov', 'Sarita Schoenebeck');
array_unshift($geeks, 'Ada Lovelace');

// 3 / "FranAllen" est mal orthographié
//   Trouvez le nom mal ortographié et remplacez-le
//   Faites une vraie recherche, n'écrivez pas l'index à la main
$iFran = array_search('FranAllen', $geeks);
array_splice($geeks, $iFran, 1, 'Fran Allen');

// 4 / "Tomoe Gozen" n'était pas une geek, mais une cheffe de guerre samouraï du Japon féodal, 
//    elle n'a rien à faire dans cette liste, il faut la retirer
//    Comme précédemment, cherchez l'index, ne l'écrivez pas à la main
$iTomoe = array_search('Tomoe Gozen', $geeks);
array_splice($geeks, $iTomoe, 1);

// 5 / Il faut trier le tableau alphabétiquement
sort($geeks);

// Affiche le tableau final
echo 'Voici une liste de femmes geeks :';

// AFFICHER LA LISTE ICI
print_r($geeks);
