<h2>01. Affichage</h2>

<?php
/*Ouverture du PhP*/

echo 'Bonjour'; // les petites quotes c'est l'affichage d'une chaine de caractère

//On peut écrire du HTML :
echo '<br>';
echo 'Bienvenue';

/*Fermeture du PhP*/
?>

<hr>

<h2>02. Variables : types, déclaration, affectation </h2>

<?php
//Créer et affecter une variable :
$prenom = 'Richard';
echo $prenom; //J'affiche la valeur de la variable, ici Richard

echo '<br>';

$a = 127; // dans ma variable qui s'appelle a je stock le nombre 127
echo gettype($a); // echo gettype pour vérifier le type de la variable. Attention ne pas laisser les verifications sur un site car ca sera affiché

echo '<br>';

$b = 1.5;
echo gettype($b);

echo '<br>';

$c = 'du texte';
echo gettype($c);

echo '<br>';

$d = '127';
echo gettype($d); //Là c'est du texte car le 127 est dans un entre-quote

echo '<br>';

$e = TRUE;
echo gettype($e);

echo '<br>';

//On peut modifier la valeur d'une variable :
$prenom = 'Amin'; // Ici on a redéclaré la variable prénom precedemment Richard en Amin; Cela a donc écrasé Richard.

?>

<hr>

<h2>03. Concaténation</h2>

<?php

//On peut afficher plusieurs chaines de caractères dans une seule instruction echo grâce à la concaténation :

echo 'Bonjour ' . 'tout le monde' . '<br>';

echo 'Bonjour ' . $prenom . ', comment ca va?<br>'; 

//Ajouter une valeur à une variable

$prenom = 'Abdelkader';
$prenom .= ' Bakouche'; // on rajoute donc une valeur à une valeur déjà existant. Du coup cela n'a pas écrasé mais bien ajouté. Il faut faire point et égale

echo $prenom;

?>

<hr>

<h2>04. Guillemets et Quotes</h2>

<?php

$message1 = "aujourd'hui";
$message2 = 'aujourd\'hui';

echo $message1 . '<br>' . $message2 . '<br>';

//Dans des guillemets la variable est interprêtée :
echo "Bonjour comment ca va $message1 ? <br>";

// Dans des quotes la variable n'est pas interprêtée :
echo 'Bonjour comment ca va $message1 ? <br>';

//Il faut concaténer :
echo 'Bonjour comment ca va ' . $message1 . ' ?<br>';

?>

<hr>

<h2>05. Constantes</h2>

<?php

//Définir une constante :
define('CAPITALE', 'Paris');
// On l'affiche :
echo CAPITALE;
// On ne peut pas modifier la valeur d'une constante 
//donc puisqu'on a définie que la valeur de CAPITALE est Paris, si on refait la fonction define en mettant Lyon au lieu de Paris, ca ne fonctionnera pas. C est donc une variable qu'on ne peut pas modifier
//define('CAPITALE', 'Lyon');
//echo CAPITALE;

echo '<br>';

// Constantes prédéfinies : 
echo __FILE__;
echo '<br>';
echo __LINE__;

?>

<hr>

<h2>06. Opérateurs Arithmétiques</h2>

<?php

$a = 10;
$b = 2;

//Nous pouvons faire des opérations en PHP :
echo $a + $b . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>';
echo $a / $b . '<br>';

$a += $b; //j'ai ajouté la valeur de $b dans la valeur de $a donc la nouvelle valeur $a sera $a+$b donc 12
echo $a;

?>

<hr>

<h2>07. Structures conditionnelles</h2>

<?php

$a = 10;
$b = 5;
$c = 2;

//Si $a est supérieur à $b alors h'affiche du texte :
if($a > $b) {
    // Tout le code entre les accolades est exécuté uniquement si la condition est valide
    echo 'A est bien supérieur à B<br>';
} else {
echo 'B est supérieur à A<br>'; // soit l'autre 
}

//Double condition
//ET (Les deux conditions doivent être valides) :
//Si A est supérieur à B ET B est supérieur à C :
if($a > $b && $b > $c){
    echo 'A est supérieur à B ET B est supérieur à C<br>';
}

// On oeut mettre une condition dans une condition :
if($a > $b){
    echo 'Premiere condition valide<br>';
    if($b < $c) {
        echo 'Deuxième condition valide<br>';
    }
}

//OU (Une seule des deux conditions minimum suffit pour rendre la condition valide) : 
//Si A est égal à 9 OU ALORS si B est supérieur à C :
if($a == 9 || $b > $c){
// les deux égales c'est pour dire que c'est égale sinon ca va remplacer la valeur (ici $a sera remplacé par la valeur 9) si on ne met qu'un egal. ==
// OU est manifesté par les deux barres ||
    echo 'A est égal 9 ou B est supérieur à C<br>';
}

// Condition exclusive (Une seule  des deux conditions doit être valide) :
//Si A est égal à 10 ou B supérieur à C :
if($a == 10 XOR $b > $c) {
    echo 'A est égal à 10 OU B est supérieur à C<br>';
}

// Si A est égal à 8
//Sinon si A est différent de 10
//Sinon...
if($a == 10){
    echo 'A est égale à 8<br>';
} else if ($a !=10){
    echo 'A est différent de 10<br>';
}else {
    echo 'Condition par défaut<br>';
}

// Vérifier l'existence d'une variable :
$var = 'qqchose';
// Si la variable $var existe :
if(isset($var)) {
    echo 'oui<br>';
} else {
    echo 'non<br>';
}

//Différence entre le double égal et le triple égal :
$vara = 1; //integer
$varb = '1';  //string
// Est ce que $vara à la même valeur que varb ?
if($vara == $varb){
    echo 'Les variables ont la même valeur<br>';
}

// Est ce que $vara et $varb ont la même valeur et type ?
if($vara === $varb){
    echo 'Les variables ont la même valeur et le même type<br>';
}else {
    echo 'Les variables ne correspondent pas<br>';
}

// = Donner une valeur à une variable
// == Comparer les valeurs
// === Comparer les valeurs et le type

//Condition Switch :
$couleur = 'jaune';
// Je vérifie la valeur de $couleur
Switch($couleur){
    //1er cas : Si c'est du bleu
    case 'bleu' : 
        echo 'Vous aimez le bleu<br>';
    break;
    //2ème cas :
    case 'rouge' : 
        echo 'Vous aimez le rouge<br>';
    break;
    //3ème cas :
    case 'vert' :
        echo 'Vous aimez le vert<br>';
    break;
    //4ème cas :
    case 'jaune' : 
        echo 'Vous aimez le jaune<br>';
    break;
    //Cas par défaut :
    default :
        echo 'Vous n\'aimez pas les couleurs testées<br>';
    break; 
}
?>

<hr>

<h2>08. Fonctions prédéfinies</h2>

<?php

$phrase = 'texte1 texte2 texte3 texte4 texte5 texte6 texte7 texte8 texte9';
echo $phrase . '<br>';

//Fonction qui permet de voir le nombre de caractères d'une chaine : 
echo iconv_strlen($phrase) . '<br>';

//Exemple sur le nb de caractère d'un mot de passe :
$password = 'test';
$nbCaractere = iconv_strlen($password);

if($nbCaractere < 10) {
echo 'Mot de passe trop petit<br>';

}

//Afficher le début d'une chaine :

echo substr($phrase, 0, 27) . '...<br>'; // ici on part du 0 pour afficher les 27 premieres caractères. Attention 0 est le 1er caractère donc y'a un décalage

//Afficher l'année actuelle :

echo date('d-m-Y') . '<br>';

?>

<hr>

<h2>09. Fonctions Utilisateurs</h2>

<?php

//Je crée une fonction :
function  bonjour(){
    //Il y a toujours des parenthese après une fonction même si elle est vide sinon cela ne sera pas reconnu
    echo 'Bonjour<br>';
}

// Je l'exécute :
bonjour();

//Fonction avec un paramètre :
function bonjour2($x){
    echo 'Bonjour ' . $x . '<br>';
}

bonjour2('Richard');

// Variable locale (qui est créée à l'intérieur d'une fonction) :
function jourSemaine(){
    $jour = 'mercredi<br>';
    return $jour; //Si je ne met pas de return ca ne fonctionnera pas
}

//jourSemaine();
//echo $jour;
//Ca ne fonctionnera pas car la variable est dans la fonction :

echo jourSemaine(); //là ca fonctionne car on a mit return, qui permet de retour la valeur d'une variable.

$r = jourSemaine();
echo $r;

//Variable globale (qui est créée en dehors d'une fonction) :
$pays = 'France';

function affichagePays(){
    global $pays; //On va récupérer la variable dans l'espace global en faisant global
    echo $pays;
}
affichagePays();

?>

<hr>

<h2>10. Structure itérative (boucle)</h2>

<?php

//WHILE :
//While est une boucle, pas une focntion mais il faut comme la fonction tjrs mettre des parentheses après
$i = 0;
while($i <=5) {
    echo 'Bonjour' . $i . '---';
    $i++; //++ c'est pour augmenter de 1 à chaque fois
}

echo '<br>';

// Refaire la même boucle, sans afficher les derniers tirets :
$i = 0;
while($i <= 5) {
    if($i < 5) {
        echo 'Bonjour' . $i . '---';
        $i++;
    } else {
        echo 'Bonjour' . $i;
        $i++;
    }
}

echo '<br>';

// Ou alors on peut aussi faire ça qui sera plus optimisé pcq pas de redondance $i :

$i = 0;
while($i < 5) {
    echo 'Bonjour' . $i . '---';
    $i++; //++ c'est pour augmenter de 1 à chaque fois
    if($i == 5){
        echo 'Bonjour' . $i;
    }
}

echo '<br>';

//FOR :
// attention dans FOR c'est séparé par des points virgules.
for($i = 0; $i <=5; $i++) {
    echo 'Tour numéro : ' . $i . '<br>';
}

echo '<br>';

// Exercice : faire un select qui affichées d'aujourd'hui à 1920
echo '<select>';
    for($i = date('Y'); $i >= 1920; $i--){
        echo '<option>' . $i . '</option>';
    }
echo '</select>';


// Excercice : Créer un tableau de 10 lignes (tr) et 10 colonnes (td)  par ligne de 00 à 99
// le i de $i peut être modifié; ici pour que cela soit plus claire et comme on aura besoin de lignes et de colonne on mettre donc $ligne et $colonne

echo '<table border="1">';
	for($ligne = 0; $ligne < 10; $ligne++) {
		echo '<tr>';
			for($colonne = 0; $colonne < 10; $colonne++) {
				echo '<td>' . $ligne . $colonne . '</td>';
			}
		echo '</tr>';
	}
echo '</table>';

?>

<hr>

<h2>11. Inclusions de fichiers</h2>

<?php

// Il y a deux manière de faire :

// INCLUDE (Il vaut mieux utiliser celui-ci car s'il y a une erreur dans l'appel du fichier, le reste de la page continu de charger):
// l'appel du fichier c'est le lien du fichier, ici 'fichier.php' et donc si jamais on écrit par exemple 'fiiechier.php' au lieu de 'fichier.php'
include('fichier.php');

// REQUIRE (s'il y a une erreur dans l'appel du fichier le reste de la page ne se charge pas):
require('fichier.php');

?>

<hr>

<h2>12. Array</h2>

<?php

// Je crée un array :
$liste = array('rouge', 'bleu', 'orange', 'jaune', 'rose'); // Attention cela demarre à 0 donc rouge est 0 , bleu est 1 etc...
// Afficher l'array :
print_r($liste);
echo '<br>';
var_dump($liste); // préférez utiliser var_dump car il donne plus d'info que print_r
echo '<br>';

//Afficher un seul élément de ma $liste :
echo $liste[2] . '<br>';// l'indice de l'array orange est 2, indice donné par print_r. Ca commence par 0 donc orange c'est 2. Et quand y'a des [] c'est que très probablement y'a des array dans l'histoire

// Autre manière pour créer un array :
// Pour rajouter au fur et à mesure des éléments

$tab[] = 'France';
$tab[] = 'Italie';
$tab[] = 'Espagne';
$tab[] = 'Angleterre';

print_r($tab);
echo '<br>';

// ou alors en une ligne :

$tab2 = ['France', 'Italie'];
var_dump($tab2);
echo '<br>';

//Boucle foreach pour parcourir un array :
foreach($tab as $indice => $valeur){
    echo $indice . ':' . $valeur . '<br>';
}

//Fonction pour voir le nombre d'éléments dans un array :

echo count($tab) . '<br>'; 

//Tableau multidimensionnel :
$tab_multi = array(0 => array ('prenom' => 'Richard', 'nom' => 'Bonnegent'), 1 => array('prenom' => 'Abdelkader', 'nom' => 'Bakouche'));
var_dump($tab_multi);

echo '[br]';

// Afficher seulement le prenom de Richard
echo $tab_multi[0] ['prenom'];



?>