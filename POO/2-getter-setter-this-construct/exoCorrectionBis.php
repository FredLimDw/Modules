<?php 

class Vehicule 
{
    private $litre;
    private $capacite;

    public function __construct(int $capacite, int $litre = null)
    {
        $this->capacite = $capacite;
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

    public function getCapacite(): int
    {
        return $this->capacite;
    }

    public function setCapacite(int $capacite): void
    {
        $this->capacite = $capacite;
    }

    public function info(): string
    {
        return 'Le véhicule a ' . $this->litre . ' litres d\'essence sur une capacité de ' . $this->capacite . 'L';  
    }
}


$vehicule1 = new Vehicule(30);
$vehicule1->setLitre(30);
echo $vehicule1->info();


class Pompe 
{
    private $reservoir;

    public function __construct(int $reservoir = 0){
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
        // if ($this->reservoir) {
        //     return 'La pompe à essence contient ' . $this->reservoir . ' litres';
        // } else {
        //     return 'La pompe est vide';
        // }

    

        if ($this->reservoir) {
            if ($this->reservoir == 1) {
                $result = '1 Litre';
            } else {
                $result = $this->reservoir . ' Litres';
            }
            
        } else {
            $result = '0 Litre';
        }
        
        
        return 'La pompe à essence contient ' . $result;
        
    }

    public function transfert(Vehicule $vehicule): string
    {
        /*
            voiture 5L sur 40L, 40 - 5 = 35L
            pompe 800L - 35L
            voiture  5 + 35L 
        */
        // si la pompe contient de l'essence (supérieur à 0 litre)
        if ($this->reservoir > 0) {


            // Calculer la quantité d'essence à transférer
            $quantiteTransfert = $vehicule->getCapacite() - $vehicule->getLitre();
            //                   40 - 5
            var_dump($quantiteTransfert);


            // si la quantité à transférer est supérieur à zéro
            if ($quantiteTransfert) {
                // si le réservoir de la pompe contient plus d'essence ou égal à la quantité à transférer dans le véhicule
                if ($this->reservoir >= $quantiteTransfert) {
                    // Rajouter la quantité dans la voiture
                    $newQuantiteVoiture = $vehicule->getLitre() + $quantiteTransfert;
                    //                           5            +      35
                    $vehicule->setLitre($newQuantiteVoiture);
                    
                    // Soustraire la quantité de la pompe
                    $newQuantitePompe = $this->reservoir - $quantiteTransfert;
                    //                     800           -      35
                    $this->reservoir =  $newQuantitePompe;
                    var_dump($this->reservoir);
                } else { // s'il n'y a pas assez d'essence 
                    $newQuantiteVoiture = $vehicule->getLitre() + $this->reservoir;
                    $vehicule->setLitre($newQuantiteVoiture);
                    $this->reservoir =  0;
                }
                



                return '';
            } else { // $quantiteTransfert est vide
                return 'Le véhicule a déjà le plein';
            }


        } else { // si la pompe est vide
            return 'La pompe est vide';
        }
        


    }
}

echo '<br>';

$pompe1 = new Pompe(2);
// $pompe1->setReservoir(800);
echo $pompe1->info();
echo '<br>';
echo $pompe1->transfert($vehicule1);

echo '<hr>';
echo $vehicule1->info();
echo '<br>';
echo $pompe1->info();
echo '<br>';


// $vehicule2 = new Vehicule(45,14);
// echo $vehicule2->info();
// $pompe1->transfert($vehicule2);

// echo '<hr>';
// echo $vehicule2->info();
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



    ajouter dans la class Vehicule la propriété privée capacity avec son get et set
    dans la méthode transfert remplacer 40 par la capacité du véhicule
    ajouter des conditions, vérifier s'il reste assez d'essence et si le véhicule n'a pas le plein 


*/