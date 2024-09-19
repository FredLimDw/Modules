<?php

/*
    1. Créer une class véhicule qui contiendra une propriété privée litre(elle aura son get et son set).
    2. Créer  également tyne méthode publique info qui affichera une phrase de type : le véhicule a .... litres d'essance
    3. Créer un objet de la class véhicule et vous lui attribuerez 5 litres d'essence (vos pouvez par le setteur ou le construct)
    4. Afficher la phrase

    5. Créer une class Pompe qui contiendra une propriété privée réservoir (elle aura son get et son set)
    6. Créer la méthode publique info qui affichera le sréservoir de la pompe : La pompe a essence à ... litres d'essence
    7. Créer un objet de la classe pompe et on lui affecterait une quantité de 800 litres.
    8 Afficher la phrase

    ----------------------------------------------------------------------------------------------------------------------------------

    9. Créer une méthode public 'transfert' dans pompe. 
    On dira que toutes les voitures ont une capacité de 40 litres.

    Le but est que les véhicules viennent a la pompe à essence faire le plein (40- quantité d essence dans le véhicule) cette quantité est à extraire de la quantité de la pompe

        Je calcule la quantité d'essence à injecter dans la voiture
        je l'injecte
        je le soustrais à la quantitué de la pompe

    10. Ajouter dans la class vehicule la,propriété privée capacity avec son get et set
        Dans la methode transfert remplacer 40 par la capacité du véhicule
        Ajouter des conditions, vérifier s'il reste assez d'essence et si le vehicule n'a pas le plein
*/ 

// CORRECTION

class Vehicule
{
    private $litre;
    private $capacity;

    public function __construct($litre = null)

    {
        $this->litre = $litre;
        $this->capacity = $argumentCapacity;
    }

    public function getLitre():int
    {
        return $this->litre;
    }
    public function setLitre($litre): void
    {
    $this->litre = $litre;
    }
    public function info(): string
    {
        return 'Le vehicule a ' . $this->litre . 'litre d\'essence sur une capacite de ' . $this->capacity;
    }
    public function getCapacity():int
    {
        return $this->capacity;
    }
    public function setCapacity($argumentCpacite): void
    {
        $this->capacity = $argumentCapacity;
    }

}

// CREATION D'OBJET

$vehicule1 = new Vehicule(30);
//$vehicule1->setLitre(5); On peut faire une des deux méthodes, soit la ligne 95 soit cette ligne 96
$vehicule1-> setLitre(10);
echo $vehicule1->info();


Class Pompe
{
    private $reservoir;

    public function __construct(int $argumentReservoir=null)
    {
        $this->reservoir = $argumentReservoir;
    }

    public function getRservoir():int
    {
        return $this->reservoir;
    }
    public function setReservoir(int $reservoir): void
    {
        $this->reservoir = $reservoir;
    }
    public function info(): string
    {
        return 'La pompe à essence contient ' . $this->reservoir . ' litres';
    }
    public function transfert(Vehicule $vehicule)
    {
        /* 
        La voiture a 5 litres sur une capacité de 40L, on doit donc faire 40-5=35L 
        pompe 800L-35L
        voiture 5+35L
        On va calculer la quantité d'essence à transférer puis on va rajouter la quantité dans la voiture et de l'autre côté soustraire la quandtité de la pompe
        */
        $quantiteTransfert = $vehicule->getCapacity() - $vehicule->getLitre();// Pour calculer la quantité d'essence à transféfer
                        //  40  -   5

        $newQuantiteVoiture = $vehicule->getLitre() + $quantiteTransfert;
                                      //5    +    35
        $vehicule->setLitre($newQuantiteVoiture);

        //Soustraire la quantité de la pompe
        $newQuantitePompe = $this->reservoir - $quantiteTransfert;
        //                          800      -       35
        $this->reservoir = $newQuantitePompe;
    }
}

echo '<br>';
$pompe1 = new Pompe(800);
//$pompe1-> setReservoir(800) : On peut faire une des deux méthodes, soit la ligne 124 soit cette ligne 125
echo $pompe1->info();
$pompe1->transfert($vehicule1);

echo '<hr>';
echo $vehicule1->info();
echo '<br>';
echo $pompe1->info();
echo '<br>';


$vehicule2 = new Vehicule(45, 14);
echo $vehicule2->info();
$pompe1->transfert($vehicule2);

echo '<hr>';
echo $vehicule2->info();
echo '<br>';
echo $pompe1->info();





