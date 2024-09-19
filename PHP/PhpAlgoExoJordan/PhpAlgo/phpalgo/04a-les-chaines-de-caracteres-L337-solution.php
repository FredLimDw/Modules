<?php

// Dans cet exercice, vous allez devoir créer un décodeur de chaînes de caractère 
// pour retrouver, à l'interieur d'une chaîne codée, le nom d'une personne
// le codage s'inspire du language L337 (lire leet)
// qui consiste à remplacer certains caractères par d'autres qui leurs ressemblent (enfin, plus ou moins)
// pour rendre la lecture plus difficile, si on ne connait pas le code.
// 
// Ainsi en L337 la phrase suivante :
// $4||_|7 4 \/0|_|$ |3$ 633|<$ !
// Signifie en fait 
// Salut à vous les geeks !
// 
// Dans notre cas, le code n'est pas si complexe, seuls quelques caractères seront "codés" en L337
// Mais il va y avoir d'autres particularités
// 
// -- 1: caractères ' ' englobants
// La chaîne encodée peut être entourée de nombreux ' ' en trop
// Ex : "  lenom    "
// 
// -- 2: longueur du nom de la personne
// Il est indiqué par la première lettre du code et ne peut pas excéder 9 caractères
// Ex : "  5lenom    "
// 
// -- 3: caractères parasites
// Le nom lui même peut être entouré de toute sorte de caractères inutiles
// il y'en a toujours autant à gauche qu'à droite et la longeur du nom est comprise dans ce nombre
// Ex : "  5$#lenom++&    " (3 caractères à gauche et à droite)
// Ex : "  5$8é&lenom$z+$m    " (5 caractères à gauche et à droite)
//
// -- 4: le tout est encodé en utilisant les règles L337 suivantes :
// A => 4
// E => 3
// I => 1
// O => 0
// S => 5
// T => 7
// L => |
// 
// -- 5: Enfin, il faudra tout mettre en minuscules pour obtenir le nom final
// 
// Exemples à tester :
// "    4M4RC$   "         => marc
// "   6#{h1y4m44%^   "    => hiyama
// "   67^$4||107-$$m "    => alliot
// "  8#7540u51554   "     => tsaousis
// " 7P#C4r713r+IR   "     => cartier
// "   7@P3#b3||4mYA#44[ " => bellamy
// " 6R55$j4z1R19+gp4  "   => jaziri
// "  9$71553R4N73&  "     => tisserant
//
//
// C'est parti !

// Déclaration de la chaîne de départ
// vous pourrez changer la valeur plus tard pour tester votre algoriothme
// en utilisant différents chaines codées
$crypedName = '    4M4RC$   ';
//$crypedName = readline('Tapez un nom crypté, svp : ');

// 1: retirer les espaces
// Dans notre cas : '4M4RC$'
$crypedName = trim($crypedName);

// 2: récupérer le premier caractère dans une variable et le convertir en entier pour avoir la longueur du nom
// Dans notre cas : 4
$tailleNom = $crypedName[0];

// 3: obtenir la longueur totale de la chaine (caractères parasites compris)
// Dans notre cas : 6
$tailleTotale = strlen($crypedName);

// 4: calculer le nombre de caractères à gauche et à droite avec l'opération suivante :
// Nb caractere = (taille totale - taille nom) / 2
// Dans notre cas : (6-4)/2 => 2/2 => 1
$nbParasites = ($tailleTotale - $tailleNom) / 2;

// Attention ! Faut-il faire quelque chose de spécial dans le cas d'un nom avec un nombre de lettres impaire ?
// Peut-être que oui, peut-être que non.

// 5: calculer la position du premier caractère du nom
// Dans notre cas : 1
$iPrems = $nbParasites;

// 6: Extraire le nom et le stocker dans une nouvelle variable
// Dans notre cas : M4RC
$crypedName = substr($crypedName, $iPrems, $tailleNom);

// 7a: Remplacer tous les '4' par des 'A'
// 7b: Remplacer tous les '3' par des 'E'
// 7c: Remplacer tous les '1' par des 'I'
// ... continuer ainsi pour toutes les règles du codage L337 indiquées plus haut
// Dans notre cas MARC
// $crypedName = str_replace('4', 'A', $crypedName);
// $crypedName = str_replace('3', 'E', $crypedName);
// $crypedName = str_replace('1', 'I', $crypedName);
// $crypedName = str_replace('5', 'S', $crypedName);
// $crypedName = str_replace('7', 'T', $crypedName);
// $crypedName = str_replace('|', 'L', $crypedName);
// $crypedName = str_replace('0', 'O', $crypedName);
$search  = ['4', '3', '1', '7', '0', '5', '|'];
$replace = ['A', 'E', 'I', 'T', 'O', 'S', 'L'];
$crypedName = str_replace($search, $replace, $crypedName);

// 8: passer le nom en minusule
// Dans notre cas marc
$crypedName = strtolower($crypedName);

// 9: Afficher le résultat final dans la console
echo $crypedName . "\n\r";