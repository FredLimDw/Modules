<!-- 1. Créer une variable 'pays' qui stocker l'information France. -->
<?php
$pays = 'France';
?>
<!-- 2. Vérifier le type de cette variable -->
<?php
echo gettype($pays) . '<br>';
?>
<!-- 3. Modifier cette variable pour qu'elle stock 'Espagne' -->
<?php
$pays = 'Espagne';
?>

<!-- 4. Afficher la phrase 'Bienvenu en (variable pays)' -->
<?php
echo "Bienvenu en $pays<br>";
echo 'Bienvenu en ' . $pays . '<br>';
?>

<!-- 5.Créer la constante CAPITALE qui stockera 'Madrid' -->
<?php 
define('CAPITALE', 'Madrid');
?>

<!-- 6. Afficher la phrase 'La capitale du pays (variable pays) est (constante CAPITALE)' -->
<?php
echo 'La capitale du pays ' . $pays . ' est ' . CAPITALE . '<br>';
?>

<!-- 7. Créer une variable nbFrance qui stockera le nombre d'habitant en France (67970000) et une autre variable nbEspagne qui stockera le nombre d'habitants en Espagne (47780000) -->
<?php
$nbFrance = 67970000;
$nbEspagne = 47780000;
?>

<!-- 8. Créer une condition pour comparer nbFrance et nbEspagne et afficher 'Il y a plus d'habitants en France' ou 'Il y a plus d'habitants en Espagne -->
<?php

if($nbFrance > $nbEspagne) {
	echo 'Il y a plus d\'habitants en France<br>';
} else {
	echo 'Il y a plus d\'habitants en Espagne<br>';
}

?>

<!-- 9. Afficher la phrase 'En France, il y a (Différence du nombre d'habitants) d'habitants en plus qu'en Espagne' -->
<?php

$diffhab = $nbFrance - $nbEspagne;
echo 'En France, il y a ' . $diffhab . ' d\'habitants en plus qu\'en ' . $pays . '<br>';
echo 'En France, il y a ' . $nbFrance-$nbEspagne . ' d\'habitants en plus qu\'en ' . $pays . '<br>';

?>
<!-- 10. Créer une fonction habitantsFrance qui affichera 'Il y a 67970000 habitants en France' et l'executer : -->
<?php

function habitantsFrance() {
	echo 'Il y a 67970000 habitants en France<br>';
}

habitantsFrance();

function habitantsFrance2() {
	global $nbFrance;
	echo 'Il y a ' . $nbFrance . ' habitants en France<br>';
}

habitantsFrance2();

?>
<!-- 11. Vérifier combien il y a de caractère dans la variable pays : -->
<?php

echo iconv_strlen($pays) . '<br>';

?>