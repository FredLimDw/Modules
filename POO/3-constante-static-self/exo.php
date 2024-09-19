<?php 

// Créer les get et set des 2 propriétés

class Vehicules
{
    private static $marque = 'BMW';
    private $couleur = 'noir';
    public static $number = 0;

    public function __construct()
    {
        ++self::$number;
    }


    public static function getMarque(): string
    {
        return self::$marque;
    }

    public static function setMarque(string $marque): void
    {
        self::$marque = $marque;
    }


    public function getCouleur(): string
    {
        return $this->couleur;
    }

    public function setCouleur(string $couleur): void
    {
        $this->couleur = $couleur;
    }
}

/*
 Créer un objet vehicule1 issu de la class Vehicule
    > Afficher une phrase de type : Le véhicule 1 est de marque *** et de couleur ***


    Créer un objet vehicule2 issu de la class Vehicule
    Modifier la couleur en rouge
    > Afficher une phrase de type : Le véhicule 2 est de marque *** et de couleur ***

    Créer un objet vehicule3 issu de la class Vehicule
    > Afficher une phrase de type : Le véhicule 3 est de marque *** et de couleur ***

    Créer un objet vehicule4 issu de la class Vehicule
    Modifier la marque en 'Mercedes'
    > Afficher une phrase de type : Le véhicule 4 est de marque *** et de couleur ***

    Créer un objet vehicule5 issu de la class Vehicule
    > Afficher une phrase de type : Le véhicule 5 est de marque *** et de couleur ***

    >> Observation, Conclusion ????
*/


$v1 = new Vehicules();
echo '<p>Le véhicule ' . Vehicules::$number . ' est de marque ' . Vehicules::getMarque() . ' et de couleur ' . $v1->getCouleur() . '<p>';

$v2 = new Vehicules();
$v2->setCouleur('rouge');
echo '<p>Le véhicule ' . Vehicules::$number . ' est de marque ' . Vehicules::getMarque() . ' et de couleur ' . $v2->getCouleur() . '<p>';

$v3 = new Vehicules();
echo '<p>Le véhicule ' . Vehicules::$number . ' est de marque ' . Vehicules::getMarque() . ' et de couleur ' . $v3->getCouleur() . '<p>';

$v4 = new Vehicules();
Vehicules::setMarque('Mercedes');
echo '<p>Le véhicule ' . Vehicules::$number . ' est de marque ' . Vehicules::getMarque() . ' et de couleur ' . $v4->getCouleur() . '<p>';

$v5 = new Vehicules();
echo '<p>Le véhicule ' . Vehicules::$number . ' est de marque ' . Vehicules::getMarque() . ' et de couleur ' . $v5->getCouleur() . '<p>';



// Les changements effectués dans les objets sont propres aux objets cependant si un changement est effectué sur la class, il est conservé
/*
---------------------------
    dans la class, il y a : 
    public static $number = 0;

    Dans les 5 phrases, remplacer les numéros par cette propriété

    à l'instanciation d'un objet, il faudrait incrémenter de 1 cette propriété

    ---------------------------------------------------------------------------
    $i++

    $i = $i + 1
    $i += 1
    $i++

    ++ suivi de la propriété


*/
