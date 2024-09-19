<?php

/*
    Créer une class VehiculeFr qui ne peut pas être instanciée
    Dans cette class:
        -Créer une méthode public demarrer() qui retournera 'demarrage' (string), cette méthode ne pourra pas être modifiable
        -Créer une méthode public carburant() qui devra obligatoirement être déclarée dans les class enfant
        -Créer une méthode public nombredeTestObligatoire() qui retournera 100 (integer)

    Créer une class Peugeot qui va hériter de VehiculeFr et qui ne peuvent pas se faire hériter
    Dans cette class :
        - Le carburant de peugeot est de l'essence (string)
        -le nombre de test obligatoire chez peaugeot est de 170

    Créer une class Renault qui va hériter de VehiculeFr
    Dans cette class :
        -Le carburant de renault est du diesel (string)
        Le nombre de test obligatoire chez renault est de 130

        ---------------------------------------
        Créer un objet peugeot et un objet renault
        afficher pour chacun d'eux le démarrage, le carburant et le nombre de test obligatoire

*/

abstract class VehiculeFr
{
    //créer une constante (voir ligne 29 30 et 51 et 70)
    //const CARBURANT_ESSENCE = 'Essence'; 
    //const CARBURANT_DIESEL = 'Diesel';

    final public function demarrer(): string
    {
        return 'Démarrage';
    }
    abstract public function carburant();

    public function nombredeTestObligatoire(): int
    {
        return 100;
    }
    abstract public function afficherDetails();
}

final class Peugeot extends VehiculeFr
{

    public function carburant(): string
    {
        return 'essence';
         //autre methode faire une constante : return VehiculeFr::CARBURANT_ESSENCE; (voir ligne 29)
    }
    public function nombredeTestObligatoire():int
    {
        return parent::nombredeTestObligatoire() + 70;
    }
    public function afficherDetails()
    {
        return "<p>{$this->demarrer()}</p>
                <p>{$this->carburant()}</p>
                <p>{$this->nombredeTestObligatoire()}</p>";
    }
}

final class Renault extends VehiculeFr
{
    public function carburant()
    {
        return 'diesel';
        //autre methode faire une constante : return VehiculeFr::CARBURANT_DIESEL; (voir ligne 30)
    }
    public function nombredeTestObligatoire(): int
    {
        return parent::nombredeTestObligatoire() + 30;
    }
    public function afficherDetails()
    {
        return "<p>{$this->demarrer()}</p>
                <p>{$this->carburant()}</p>
                <p>{$this->nombredeTestObligatoire()}</p>";
    }
}

$Peugeot1 = new Peugeot();
{
    echo 'Peugeot ' . $Peugeot1->demarrer() . ' ' . $Peugeot1->carburant() . ' ' . $Peugeot1->nombredeTestObligatoire();
}
echo '<br>'; 
echo '<br>';

$Renault1 = new Renault();
{
    echo 'Renault' . $Renault1->demarrer() . ' ' .  $Renault1->carburant() . ' ' .  $Renault1->nombredeTestObligatoire();
}