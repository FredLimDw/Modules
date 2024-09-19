<?php
/**********************************************
 * Opérations mathématiques simples
 *********************************************/

// Deux variables pour nos opérations mathématiques
$a = 10;
$b = 5;

$addition        = $a + $b ;   // Calcul d'une addition
$soustraction    = $a - $b ;   // Calcul d'une soustraction
$multipication   = $a * $b ;   // Calcul d'une multipication
$division        = $a / $b ;   // Calcul d'une division

const EOL = "\n\r";     // juste un retour à ligne dans le terminal

// Affichage de plusieurs messages, un par opération
// Le '.' permet de créer des messages complexes
echo EOL; // Ligne vide
echo '********** OPÉRATIONS SIMPLES **********' . EOL;
echo EOL; // Ligne vide
echo 'Addition : '       . $a  . ' + ' . $b . ' = ' . $addition . EOL;
echo 'Soustraction : '   . $a  . ' - ' . $b . ' = ' . $soustraction . EOL;
echo 'Multipication : '  . $a  . ' * ' . $b . ' = ' . $multipication . EOL;
echo 'Division : '       . $a  . ' / ' . $b . ' = ' . $division . EOL;
echo EOL; // Ligne vide

/********************************************** 
 * Opérations mathématiques avancées
 *********************************************/
$c = 12; // Une nouvelle variable pour avoir un reste

$modulo1 = $a%$b;   // devrait donner 0
$modulo2 = $c%$b;   // devrait donner 2
$puissance = $a**$b; // 10x10x10x10x10 = 100000

// Affichage des résultats
echo EOL; // Ligne vide
echo '********** OPÉRATIONS AVANCÉES **********' . EOL;
echo EOL; // Ligne vide
echo 'Modulo : '     . $a  . ' % '  . $b . ' = ' . $modulo1 . EOL;
echo 'Modulo : '     . $c  . ' % '  . $b . ' = ' . $modulo2 . EOL;
echo 'Puissance : '  . $a  . ' ** ' . $b . ' = ' . $puissance . EOL;
echo EOL; // Ligne vide

/**********************************************
 * Tests de fonctions Mathématiques
 *********************************************/ 

 echo EOL; // Ligne vide
 echo '********** Fonctions Mathématiques **********' . EOL;
 echo EOL; // Ligne vide

 // Affichage de pi
 echo 'Pi : ' . M_PI . EOL;
 echo EOL; // Ligne vide

 // Calcul de nombres aléatoires
 const MAX = 10;    // Le maximum

 // Un premier nombre aléatoire entre 0 et max
 $rnd = rand(0, MAX);
 echo 'Voici un nombre aléatoire entre 0 et ' . MAX . ' : ' . $rnd . EOL;

 // Un autre nombre aléatoire entre 0 et max
 $rnd2 =  rand(0, MAX);
 echo 'Et en voici un autre, ou pas d\'ailleurs : ' . $rnd2 . EOL;
 echo EOL; // Ligne vide

 // Calcul de l'hypoténuse d'une triangle rectangle
 $a = 4;
 $b = 3;
 $hyp = hypot($a, $b);
 echo 'Soit un ◺ dont les côtés adjacents font ' . $a . ' et ' . $b . '.' . EOL;
 echo 'L\'hypoténuse fait : ' . $hyp . EOL;
 echo EOL; // Ligne vide