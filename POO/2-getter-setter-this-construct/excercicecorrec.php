<?php 

class Vehicule 
{
    private $litre;

    public function __construct(int $litre = null)
    {
        $this->litre = $litre;
    }

    public function getLitre(): int
    {
        return $this->litre;
    }

    public function setLitre(int $litre): void
    {
        $this->litre = $litre;
    }

    public function info(): string
    {
        return 'Le véhicule a ' . $this->litre . ' litres d\'essence';  
    }
}


$vehicule1 = new Vehicule();
$vehicule1->setLitre(5);
echo $vehicule1->info();


class Pompe 
{
    private $reservoir;

    public function __construct(int $reservoir = null){
        $this->reservoir = $reservoir;
    }

    public function getReservoir(): int
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
            voiture 5L sur 40L, 40 - 5 = 35L
            pompe 800L - 35L
            voiture  5 + 35L 
        */

        // Calculer la quantité d'essence à transférer
        $quantiteTransfert = 40 - $vehicule->getLitre();
        //                   40 - 5

        // Rajouter la quantité dans la voiture
        $newQuantiteVoiture = $vehicule->getLitre() + $quantiteTransfert;
        //                           5            +      35
        $vehicule->setLitre($newQuantiteVoiture);
        
        // Soustraire la quantité de la pompe
        $newQuantitePompe = $this->reservoir - $quantiteTransfert;
        //                     800           -      35
        $this->reservoir =  $newQuantitePompe;
    }
}

echo '<br>';

$pompe1 = new Pompe(800);
// $pompe1->setReservoir(800);
echo $pompe1->info();

$pompe1->transfert($vehicule1);

echo '<hr>';
echo $vehicule1->info();
echo '<br>';
echo $pompe1->info();
echo '<br>';


$vehicule2 = new Vehicule(14);
echo $vehicule2->info();
$pompe1->transfert($vehicule2);

echo '<hr>';
echo $vehicule2->info();
echo '<br>';
echo $pompe1->info();
/*
    Créer une class Vehicule qui contiendra une propriété privée litre (elle aura son get et son set)
    créer également une méthode public info qui affichera une phrase de type : le véhicule a ... litres d'essence

    Créer un objet de la class Véhicule et vous lui attribuerait 5 litres d'essence (vous pouvez par le setteur ou pourquoi pas le construct)

    afficher la phrase 




    Créer une class Pompe qui contiendra une propriété privée reservoir (elle aura son get et son set)
    créer la méthode public info qui affichera le reservoir de la pompe : la pompe à essence à ... litres d'essence

    Créer un objet de la class Pompe et vous lui affecterait une quantité de 800 litres 

    afficher la phrase


    -----------------------------------------------
    créer une méthode public 'transfert' dans Pompe

    On dira que toutes les voitures ont une capacité de 40 litres

    le but est que les véhicules viennent à la pompe à essence faire le plein 
    (40 - la quantité d'essence dans le véhicule) cette quantité est à extraire de la quantité de la pompe


*/