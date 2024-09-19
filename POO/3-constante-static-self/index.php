<?php

class Maison
{
    private static $nbPiece = 7;
    public static $espaceTerrain = 500;
    public $couleur = 'blanc';
    const HAUTEUR = 10;
    private $nbPorte = 10;

    public static function getNbPiece():int
    {
        return self::$nbPiece;
    }
    public function getNbPorte():int
    {
        return $this->nbPorte;
    }
}
$maison = new Maison();
echo 'La couleur de la maison est ' . $maison->couleur; //la $couleur est public donc on peut l'appeler directement.
echo '<br>';
echo 'Le nombre de porte dans la maison est ' . $maison->getNbPorte(); //get parce que la variable $nbPorte est private.
echo '<br>';
echo 'L\'espace du terrain est de ' . Maison::$espaceTerrain;
echo '<br>';
echo 'La hauteur de la maison est ' . Maison::HAUTEUR;// Une constante on l'ecrit toujours en CAPITAL, par convention
echo '<br>';
echo 'Le nombre de pièce dans la maison est ' . Maison::getNbPiece();

/*Depuis l'objet on accède aux informations (public) et NON STATIC
Depuis la class on accès aux informations SATIC et aux constantes
Les syntaxes sont :
CLASS::$propriété
CLASS::CONSTANTE (les constantes s'écrivent toujlours en majuscule)
La difference entre les variable objet et constante c'est que les variable objet peuvent varier alors que les valeurs constantes non
$this permet de rechercher dans l'objet ($this fait référence à un objet de la class)
self:: permet de rechercher dans la class (self:: fait référence à la class elle-même) */