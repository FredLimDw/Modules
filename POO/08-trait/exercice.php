<?php

/*
    Créer une interface EtreVivant, qui contiendra les méthodes :
        -respirer
        -dormir
        -manger
        -boire

    Créer une interface Renseignement, qui contiendra les méthodes :
        -espece
        -sexe
        -age

    Créer le trait voler, qui contiendra une méthode :
        voler() qui retournera 'Cet animal peut voler'

    Créer un trait pondre, qui contiendra une méthode :
        pondre() qui retournera 'Cet animal peut pondre'

    Créer un trait vivipare, qui contiendra une méthode :
        vivipare() qui retournera 'Cet animal ne ponds pas d'oeufs'

    Créer un trait ramper, qui contiendra une méthode :
        ramper() qui retournera 'Cet animal peut ramper'

    Créer un trait quadrupede, qui contiendra une méthode :
        quadrupede() qui retournera 'Cet animal a 4 pattes'

    Créer un trait nager, qui contiendra une méthode :
        nager() qui retournera 'Cet animal a peut nager'

    Créer un trait marcher, qui contiendra une méthode:
        marcher() qui retournera 'Cet animal peut marcher'

    Créer des class : PoissonRouge, Baleine, Boa, Chien, Aigle

    Ces class doivent implémenter les 2 interfaces (à vous de remplir les méthodes)
    Importer les traits en fonction de l'animal

    Créer un objet pour chaque class et afficher les différents méthodes soit les unes après les autres sinon créer une méthode afficherDetails()
    
*/

interface EtreVivant
{
    public function respirer(): string;
    public function dormir(): string;
    public function manger(): string;
    public function boire(): string;

}

interface Renseignement
{
    public function espece(): string;
    public function sexe(): string;
    public function age(): int;
}

trait Voler
{
    public $proprieteVoler = 'voler';
    public function functionVoler(): string
    {
        return 'Cet animal peut voler';
    }
}
trait Pondre
{
    public $proprietePondre = 'pondre';
    public function functionPondre(): string
    {
        return 'Cet animal peut pondre';
    }
}
trait Vivipare
{
    public $proprieteVivipare = 'vivipare';
    public function functionVivipare(): string
    {
        return 'Cet animal ne pond pas d\'oeufs';
    }
}
trait Ramper
{
    public $proprieteRamper = 'ramper';
    public function functionRamper(): string
    {
        return 'Cet animal peut ramper';
    }
}
trait Quadrupede
{
    public $proprieteQuadrupede = 'quadrupede';
    public function functionQuadrupede(): string
    {
        return 'Cet animal a 4 pattes';
    }
}
trait Nager
{
    public $proprieteNager = 'nager';
    public function functionNager(): string
    {
        return 'Cet animal peut nager';
    }
}
trait Marcher
{
    public $proprieteMarcher = 'marcher';
    public function functionMarcher(): string
    {
        return 'Cet animal peut marcher';
    }
}

class PoissonRouge implements EtreVivant, Renseignement
{
    public function respirer(): string
    {
        return 'Respire';
    }
    public function manger(): string
    {
        return 'Manger';
    }
    public function dormir(): string
    {
        return 'Dormir';
    }
    public function boire(): string
    {
        return 'Boire';
    }
    public function espece(): string
    {
        return 'espece';
    }
    public function sexe(): string
    {
        return 'sexe';
    }
    public function age(): int
    {
        return 'age';
    }

    use Pondre, Nager;

    public function afficherDetails()
    {
        return "<p>{$this->functionPondre()}</p>
                <p>{$this->functionNager()}</p>";
    }

}
class Baleine implements EtreVivant, Renseignement
{
    public function respirer(): string
    {
        return 'Respire';
    }
    public function manger(): string
    {
        return 'Manger';
    }
    public function dormir(): string
    {
        return 'Dormir';
    }
    public function boire(): string
    {
        return 'Boire';
    }
    public function espece(): string
    {
        return 'espece';
    }
    public function sexe(): string
    {
        return 'sexe';
    }
    public function age(): int
    {
        return 'age';
    }

    use Vivipare, nager;

    public function afficherDetails()
    {
        return "<p>{$this->functionVivipare()}</p>
                <p>{$this->functionNager()}</p>";
    }

}
class Boa implements EtreVivant, Renseignement
{
    public function respirer(): string
    {
        return 'Respire';
    }
    public function manger(): string
    {
        return 'Manger';
    }
    public function dormir(): string
    {
        return 'Dormir';
    }
    public function boire(): string
    {
        return 'Boire';
    }
    public function espece(): string
    {
        return 'espece';
    }
    public function sexe(): string
    {
        return 'sexe';
    }
    public function age(): int
    {
        return 'age';
    }

    use Pondre, Ramper, Nager;

    public function afficherDetails()
    {
        return "<p>{$this->functionPondre()}</p>
                <p>{$this->functionRamper()}</p>
                <p>{$this->functionNager()}</p>";
    }

}
class Chien implements EtreVivant, Renseignement
{
    public function respirer(): string
    {
        return 'Respire';
    }
    public function manger(): string
    {
        return 'Manger';
    }
    public function dormir(): string
    {
        return 'Dormir';
    }
    public function boire(): string
    {
        return 'Boire';
    }
    public function espece(): string
    {
        return 'espece';
    }
    public function sexe(): string
    {
        return 'sexe';
    }
    public function age(): int
    {
        return 'age';
    }

    use Vivipare, Ramper, Quadrupede, Nager, Marcher;

    public function afficherDetails()
    {
        return "<p>{$this->functionVivipare()}</p>
                <p>{$this->functionRamper()}</p>
                <p>{$this->functionQuadrupede()}</p>
                <p>{$this->functionNager()}</p>
                <p>{$this->functionMarcher()}</p>";
    }

}

class Aigle implements EtreVivant, Renseignement
{
    public function respirer(): string
    {
        return 'Respire';
    }
    public function manger(): string
    {
        return 'Manger';
    }
    public function dormir(): string
    {
        return 'Dormir';
    }
    public function boire(): string
    {
        return 'Boire';
    }
    public function espece(): string
    {
        return 'espece';
    }
    public function sexe(): string
    {
        return 'sexe';
    }
    public function age(): int
    {
        return 'age';
    }

    use Voler, Pondre, Marcher;

    public function afficherDetails()
    {
        return "<p>{$this->functionVoler()}</p>
                <p>{$this->functionPondre()}</p>
                <p>{$this->functionMarcher()}</p>";
    }

}

/*$PoissonRouge = new PoissonRouge();
echo $PoissonRouge->proprietePondre;
echo '<br>';
echo $PoissonRouge->functionPondre();
echo '<br>';
echo $PoissonRouge->proprieteNager;
echo '<br>';
echo $PoissonRouge->functionNager();
echo '<br>';
echo '<br>'; 
$Baleine = new Baleine();
echo $Baleine->proprieteVivipare;
echo '<br>';
echo $Baleine->functionVivipare();
echo '<br>';
echo $Baleine->proprieteNager;
echo '<br>'; 
echo $Baleine->functionNager();
echo '<br>';
echo '<br>'; 
$Boa = new Boa();
echo $Boa->proprietePondre;
echo '<br>';
echo $Boa->functionPondre();
echo '<br>';
echo $Boa->proprieteRamper;
echo '<br>'; 
echo $Boa->functionRamper();
echo '<br>';
echo $Boa->proprieteNager;
echo '<br>'; 
echo $Boa->functionNager();
echo '<br>';
echo '<br>'; 
$Chien = new Chien();
echo $Chien->proprieteVivipare;
echo '<br>';
echo $Chien->functionVivipare();
echo '<br>';
echo $Chien->proprieteRamper;
echo '<br>'; 
echo $Chien->functionRamper();
echo '<br>';
echo $Chien->proprieteQuadrupede;
echo '<br>'; 
echo $Chien->functionQuadrupede();
echo '<br>';
echo $Chien->proprieteNager;
echo '<br>'; 
echo $Chien->functionNager();
echo '<br>';
echo $Chien->proprieteMarcher;
echo '<br>'; 
echo $Chien->functionMarcher();
echo '<br>'; 
echo '<br>'; 
$Aigle = new Aigle();
echo $Aigle->proprieteVoler;
echo '<br>';
echo $Aigle->functionVoler();
echo '<br>';
echo $Aigle->proprietePondre;
echo '<br>'; 
echo $Aigle->functionPondre();
echo '<br>';
echo $Aigle->proprieteMarcher;
echo '<br>'; 
echo $Aigle->functionMarcher();
echo '<br>';*/
