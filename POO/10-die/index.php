<?php

function recherche($tableau, $valeurRecherchee) 
{
    //Si $tableau n'est pas de type array. Le point d'exclamation represente l'inverse et ou la négation ici
    if(!is_array($tableau)){
        die('Vous devez saisir un tableau'); // die permet de stopper le code.
    }
    if(in_array($valeurRecherchee, $tableau)){
        return 'Oui, ' . $valeurRecherchee . ' existe dans le tableau';
    }else{
        return 'Non, ' . $valeurRecherchee . ' n\'existe pas dans le tableau';
    }
}
    

$fruits = ['orange', 'fraise', 'banane'];

$tableauFake = 10;

echo recherche($fruits, 'fraise');
echo '<hr>';
echo recherche($fruits,'kiwi');

echo '<hr>';

echo recherche($tableauFake, 'njdhfkjd');

