<?php

// CRÉEZ LES CONDITIONS SUIVANTES :

// 1 - CALCUL DE L'ÂGE
// Demandez à l'utilisateur de saisir son année de naissance.
// Refuser les années avant 1900 ou après 2023. (message d'erreur)
// Sinon, calculer l'âge de la personne
// (optionnel) : une fois cela fait, vous pouvez, si vous le souhaitez, ajouter des messages supplémentaires en fonction de l'âge de la personne
// par exemple si son age est inférieur à 10 ans, ou supérieur à 100...

// ENTIER annee = DEMANDER "Quelle est vôtre année de naissance ? "
$annee = readline('Quelle est vôtre année de naissance ? ');
// SI (annee < 1900 OU annee > 2023) ALORS 
if ($annee < 1900 || $annee > 2023) {
    // AFFICHER "Veuillez saisir une année entre 1900 et 2023."
    echo 'Veuillez saisir une année entre 1900 et 2023.';
    // SINON
} else {
    // ENTIER age = 2023 - annee;
    $age = 2023 - $annee;
    // AFFICHER "vous avez " . age . " ans."
    echo 'Vous avez ' . $age . ' ans';
    // FIN SI 
}


// 2 - DIVISION
// Demandez deux nombres a et b à l'utilisateur
// Affichez le résultat de la division de a par b (attention au piège) 

// ENTIER a = DEMANDER "Saisissez un nombre : "
$a = readline('Saisissez un nombre : ');
// ENTIER b = DEMANDER "Saisissez un autre nombre : "
$b = readline('Saisissez un autre nombre : ');
// SI ( b = 0) ALORS
if ($b == 0) {
    // AFFICHER "Division par zéro impossible."
    echo 'Division par zéro impossible.';
    // SINON
} else {
    $resultat = $a/$b;
    // ENTIER resultat = a/b;
    // AFFICHER "a / b = resultat";
    echo "$a/$b = $resultat";
// FIN SI
}


// 3 - TROUVEZ PI 
// Demandez à l'utilisateur de taper la valeur de PI 
// arrondie à 2 chiffres après la virgule
// Féliciter l'utilisateur si il a bien répondu
// Le réprimer si ce n'est pas le cas

// DECIMAL pi 
// DECIMAL m_pi 
//
const PRECISION = 2;
// pi = DEMANDER "Veuillez saisir la valeur de PI : "
$pi = readline('"Veuillez saisir la valeur de PI : ');
// pi = ARRONDIR pi A 2 DECIMAL
$pi = round($pi, PRECISION);
// m_pi = ARRONDIR M_PI A 2 DECIMAL
$m_pi = round(M_PI, PRECISION);
// SI pi = m_pi ALORS
if($pi == $m_pi){
    // AFFICHER 'Bravo !'
    echo 'Bravo !';
    // FIN SI
} else {
    echo 'Bouhou !';
}

// 4 - ÉTAT DE L'EAU
// Demandez à l'utilisateur de saisir une température
// Lui dire si, à cette température, l'eau est à l'état solide, liquide, ou gazeux

// ENTIER temp = DEMANDER "veuillez saisir une température en °C : "
$temp = readline('veuillez saisir une température en °C : ');
// SI (temp <= 0) ALORS
if ($temp <= 0) {
    // AFFICHER "A temps°C l'eau est sous forme de glace."
    echo  'À '.$temp.'°C l\'eau est sous forme de glace.';
// SINON SI (temps >= 100) ALORS
} else if ($temp >= 100){
    // AFFICHER "A temps°C l'eau est sous forme de vapeur."
    echo  'À '.$temp.'°C l\'eau est sous forme de vapeur.';
// SINON
} else {
    // AFFICHER "A temps°C l'eau est juste de l'eau."
    echo  'À '.$temp.'°C l\'eau est juste de l\'eau.';
// FIN SI
}
 

// 5 - DIVISIBLE PAR 3 ET/OU 5 ?
// Demandez un nombre à l'utilisateur.
// Lui dire si ce nombre est divisible par 5 et/ou par 3
// Note : souvenez-vous de l'opérateur %

// ENTIER nombre = DEMANDER "Veuillez saisir un nombre : "
$nombre = readline('Veuillez saisir un nombre : ');
// SI (nombre%5 = 0 ET nombre%3 = 0) ALORS
if ($nombre%5 == 0 && $nombre%3 == 0) {
    // AFFICHER "nombre est divisible par 3 et par 5";
    echo $nombre . ' est divisible par 3 et par 5';
// SINON SI (nombre%5 = 0) ALORS
} else if ($nombre%5 == 0) {
    // AFFICHER "nombre est divisible par 5 mais pas par 3";
    echo $nombre . ' est divisible par 5 mais pas par 3';
// SINON SI (nombre%3 = 0) ALORS
} else if ($nombre%3 == 0) {
    // AFFICHER "nombre est divisible par 3 mais pas par 5";
    echo $nombre . ' est divisible par 3 mais pas par 5';
// SINON
} else {
    // AFFICHER "nombre n'est divisible ni par 3 ni par 5";
    echo $nombre . ' n\'est divisible ni par 3 ni par 5';
// FIN
}

// 6 - CONSONNE OU VOYELLE ?
// Demandez à l'utilisateur de saisir une lettre,
// puis, lui dire si c'est une voyelle ou une consonne

// SOLUTION 1 :
// STRING lettre = DEMANDER "Veuillez saisir une lettre : "
$lettre = readline('Veuillez saisir une lettre : ');
// lettre = MAJUSCULE (lettre)
$lettre = strtoupper($lettre);
// SELON lettre
switch ($lettre){
// CAS 'A' :
// CAS 'E' :
// CAS 'I' :
// CAS 'O' :
// CAS 'U' :
// CAS 'Y' :
case 'A' :
case 'E' :
case 'I' :
case 'O' :
case 'U' :
case 'Y' :
    // AFFICHER "lettre est une voyelle"
    echo $lettre . ' est une voyelle';
    break;
    // DEFAUT :
default:
    // AFFICHER "lettre est une consomme"
    echo $lettre . ' est une consonne';
    break;
// FIN SELON
}

// SOLUTION 2 :
// TABLEAU voyelles = ['A', 'E', 'I', 'O', 'U', 'Y']
// STRING lettre = DEMANDER "Veuillez saisir une lettre : "
// lettre = MAJUSCULE (lettre)
// SI (lettre N'EST PAS DANS TABLEAU voyelles) ALORS
    // AFFICHER "lettre est une consonne"
// SINON
    // AFFICHER "lettre est une voyelle"
// FIN SI