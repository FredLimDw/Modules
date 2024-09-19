<?php
// RÉALISEZ LES BOUCLES SUIVANTES :

// 1 - boucler de 1 à 1000 avec un pas de 1
for ($i = 1; $i <= 1000; $i++){
    echo $i . ' ';
}
echo "\r\n";
echo "\r\n";
// 2 - boucler de 0 à 5000 avec un pas de 10
for ($i = 0; $i <= 5000; $i = $i + 10){
    echo $i . ' ';
}
echo "\r\n";
echo "\r\n";
// 3 - boucler de 0 à -100 000 avec un pas de -100
for ($i = 0; $i >= -100000; $i = $i - 100){
    echo $i . ' ';
}
echo "\r\n";
echo "\r\n";
// 4 - afficher toutes les puissances de 2 de 1 à 65 536
// Résultat attendu :
// 1, 2, 4, 8, 16, 32, 64, 128, 256, ...
for ($i = 0; $i <= 16; $i++){
    echo 2**$i . ' '; 
}
echo "\r\n";
echo "\r\n";
for ($i = 1; $i <=65536; $i*=2){
    echo $i . ' ';
}
echo "\r\n";
echo "\r\n";
// 5 - afficher la table de multiplication d'un nombre saisit par l'utilisateur
// Résultat avec '3' :
// 0, 3, 6, 9, 12, 15, 18, 21, 24, 27, 30
$nb = readline('Veuillez saisir un nombre svp : ');
for($i = 0; $i <= 10; $i++){
    echo $nb*$i . ' ';
}
echo "\r\n";
echo "\r\n";
// 6 - afficher la suite fibonacci commençant par 0 et 1 jusqu'à 1346269
// Note : dans la suite fibonacci un nouveau nombre est toujours la somme des deux précédents.
// Donc, 0 + 1 => 1, puis 1 + 1 => 2, puis 1 + 2 => 3, puis 2 + 3 => 5 ...
// Résultat attendu :
// 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, ...
$precedent = 0;
$actuel    = 1;
$suivant   = 0;
while($suivant < 1346269){
    $suivant = $precedent + $actuel;
    echo $suivant . ' ';
    $precedent  = $actuel;
    $actuel     = $suivant;
}