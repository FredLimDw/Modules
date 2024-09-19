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
    protected $marque;
    protected $modele;
    protected $vitesseMax;

    public function __construct(string $marque, string $modele, int $vitesseMax)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->vitesseMax = $vitesseMax;
    }

    public function afficherDetails(): string //ci dessous autre facon d'écrire qu'en concaténation avec les accolades et les double guillemets
    {
        return "<p>Marque : {$this->marque} </p> 
                <p>Modèle :  {$this->modele} </p>
                <p>Vitesse Max : {$this->vitesseMax} </p>";
    }

    public function rouler(int $vitesse): string
    {
        if ($vitesse > $this->vitesseMax) {
            return '<h2>Impossible de rouler à cette vitesse, elle dépasse la vitesse maximale</h2>';
        } else {
            return '<h2>Le véhicule roule à ' . $vitesse . ' Km/h</h2>';
        }
        
        
    }

}

Class Voiture extends Vehicle
{
    private $nombreDePortes;

    public function __construct(string $marque, string $modele, int $vitesseMax, int $nombreDePortes) 
    {
        parent::__construct($marque,$modele,$vitesseMax); //surchargement
        $this->nombreDePortes = $nombreDePortes;
    }

    public function afficherDetails(): string
    {
        return parent::afficherDetails() . '<p>Nombre de portes : ' . $this->nombreDePortes . '</p>';
    }
}

Class Moto extends Vehicle
{
    const SPORT = 'Sport';
    const ROADSTER = 'Roadster';
    const CRUISER = 'Cruiser';

    private $typeMoto;

    public function __construct(string $marque, string $modele, int $vitesseMax, string $typeMoto)
    {
        parent::__construct($marque,$modele,$vitesseMax);
        $this->typeMoto = $typeMoto;
    }

    public function afficherDetails(): string
    {
        return parent::afficherDetails() . '<p>Type Moto : ' . $this->typeMoto . '</p>';
    }
}


$voiture1 = new Voiture('audi', 'a3', 250, 3);
echo $voiture1->afficherDetails();
echo $voiture1->rouler(270);

echo '<hr>';

$moto1 = new Moto('suzuki', 'gsxr', 280, Moto::CRUISER);
echo $moto1->afficherDetails();
echo $moto1->rouler(240);