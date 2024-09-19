<?php

/*Créez une classe Vehicle qui a les propriétés suivantes :

marque (string)
modele (string) 
vitesseMax (int) 
(quelle visibilité ?)

Créez un constructeur qui initialise ces propriétés lors de l'instanciation.

Ajoutez une méthode afficherDetails() qui affiche les détails du véhicule (marque, modèle et vitesse maximale).

Ajoutez une méthode rouler($vitesse) qui retourne un message indiquant que le véhicule roule à une certaine vitesse.

---------------------------------------------------
Créez une classe Voiture qui hérite de Vehicle.

Ajoutez une propriété spécifique nombreDePortes (int) pour indiquer combien de portes la voiture a.

Surchargez la méthode afficherDetails() pour inclure également le nombre de portes dans l'affichage.


-------------------------------------------------
Créez une classe Moto qui hérite de Vehicle.

Ajoutez une propriété spécifique typeMoto (string) pour indiquer le type de moto (ex. : "Sport", "Cruiser").

Surchargez la méthode afficherDetails() pour inclure le type de moto dans l'affichage.

------------------------------------------------
Instanciez une (ou plusieurs) voiture et une (ou plusieurs) moto, puis appelez leurs méthodes afficherDetails() et rouler() pour vérifier que tout fonctionne correctement.


Bonus : mettre une vérification dans rouler() si la vitesse est supérieure à vitesseMax c'est impossible*/

class Vehicle
{
    private static $marque;
    private $model;
    public static $vitesseMax;
    private $roule;

    public function __construct(string $argumentMarque, string $argumentModel, int $argumentVitesseMax)
    {
        $this->marque->$argumentMarque;
        $this->model->$argumentModel;
        $this->vitesseMax->$argumentVitesseMax;
    }
    public function info(): string 
    {
        return 'Ce véhicule est de la marque '. $this->marque . 'modele ' . $this->model . 'qui peut rouler jusqu\à ' . $this->vitesseMax . 'km/h maxi';
    }
    public function getRoule(): int
    {
        return $this->roule;
    }
    public function setRoule(int $argumentRoule): void
    {
        $this->roule->$argumentRoule;
    }
}

Class Voiture extends Vehicle
{
    private $nbPorte;

    public function getnbPorte()
    {
        return $this->nbPorte;
    }
    public function setnbPorte(int $argumentnbPorte)
    {
        $this->nbPorte->$argumentnbPorte;
    }



}