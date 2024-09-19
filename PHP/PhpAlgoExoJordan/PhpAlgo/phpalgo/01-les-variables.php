<?php

// On peu déclarer une variable à tout moment"

$annee   = 1815;         // <= Entier (integer)
$prenom  = 'Ada';        // <= Chaîne de caractères (string)
$nom     = 'Lovelace';   // <= Autre chaîne de caractères (string)
$isGeek  = true;         // <= Booléen (boolean)

const EOL = "\n\r";     // juste un retour à ligne dans le terminal

// echo est une fonction de php 
// qui permet d'afficher un message dans le terminal, 
// ou dans le HTML de la page (vous verrez cela plus tard)
// on peut combiner plusieurs morceaux de chaînes avec le caractère'.'
echo $prenom . ' ';
echo $nom . EOL;
echo $annee . EOL;
echo 'est un geek ? ';
echo $isGeek . EOL;

// Une constante se déclare avec l'instruction "const", on ne mets pas de '$'
const PI = '3.14159';
echo 'Elle aimait bien pi :';
echo  PI . EOL;

echo EOL; // Ajoute un saut de ligne dans le terminal avant le bloc suivant

// ATTENTION ! On a pas le droit de modifier une constante
// Ce code va générer une erreur, essayez :

// PI = 3.141592653589793;

// Génère l'erreur : 
// PHP Parse error:  syntax error, unexpected token "=" in C:\xampp\htdocs\COURS\PHP\Introduction-programmation\01-les-variables.php on line 32
// (oui, va falloir se mettre à l'anglais)

// Comme on a déjà créé les variables plus haut dans le programme, 
// on peut les réutiliser, elles se verront 'réasignées' de nouvelles valeurs.
$annee   = 1810;         
$prenom  = 'Alfred';        
$nom     = 'De Musset';   
$isGeek  = false;   

// Ce qui permet de réutiliser exactement le même code que précédemment
echo $prenom . ' ';
echo $nom . EOL;
echo $annee . EOL;
echo 'est un geek ? ';
echo $isGeek . EOL;

// Mais d'obtenir un résultat différent.
// C'est ça la programmation