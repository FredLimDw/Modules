<!-- 1. Créer une variable 'pays' qui stocker l'information France. -->


<!-- 2. Vérifier le type de cette variable -->


<!-- 3. Modifier cette variable pour qu'elle stock 'Espagne' -->


<!-- 4. Afficher la phrase 'Bienvenu en (variable pays)' -->

<!-- 5.Créer la constante CAPITALE qui stocker 'Madrid' -->

<!-- 6. Afficher la phrase 'La capitale du pays (variable pays) est (constante CAPITALE)' -->

<!-- 7. Créer une variable nbFrance qui stocker le nombre d'habitant en France (67970000) et une autre variable nbEspagne qui stockera le nombre d'habitants en Espagne (47780000) -->

<!-- 8. Créer une condition pour comparer nbFrance et nbEspagne et afficher 'Il y a plus d'habitants en France' ou 'Il y a plus d'habitants en Espagne -->

<!-- 9. Afficher la phrase 'En France, il y a (Différence du nombre d'habitants) d'habitants en plus qu'en Espagne' -->

<!-- 10. Créer une fonction habitantsFrance qui affichera 'Il y a 67970000 habitants en France' et k'éxécuter : -->
<?php

function habitantsFrance(){
   global $nbFrance;
   echo 'Il y a ' . $nbFrance . ' habitants en France<br>';
}

?>
<!-- 11. Vérifier combien il y a de caractère dans la vairable pays : -->



<?php
 $pays = 'France';
 echo $pays;

 echo '<br>';

 echo gettype ($pays);

 $pays = 'Espagne';
 echo $pays;

 echo '<br>';

 echo "Bienvenue en $pays";

 echo '<br>';

 define('CAPITALE', 'Madrid');
 echo CAPITALE;
 
 echo '<br>';

 echo 'La capitale du pays ' . $pays . ' est ' . CAPITALE . '<br>';

 echo '<br>';

 $nbFrance = 67970000;
 $nbEspagne = 47780000;

 echo '<br>';

 if($nbFrance > $nbEspagne) {
    echo 'Il y a plus d\'habitants en France<br>';
 } else {'Il y a plus d\'habitants en Espagne<br>';
 };

 $diffhab = $nbFrance - $nbEspagne;
echo 'En France, il y a ' . $diffhab . ' d\'habitants en plus qu\'en ' . $pays . '<br>';

//Ou alors optimisé donc sans créer une valeur en plus, ici sans diffhab

echo 'En France, il y a ' . $nbFrance-$nbEspagne . ' d\'habitants en plus qu\'en ' . $pays . '<br>';


?>