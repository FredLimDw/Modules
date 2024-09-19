<?php
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
    public function age(): string;
}

trait Voler
{
    public function voler(): string
    {
        return 'L\'animal peut voler';
    }
}

trait Pondre
{
    public function pondre(): string
    {
        return 'L\'animal peut pondre';
    }
}

trait Vivipare
{
    public function vivipare(): string
    {
        return 'L\'animal peut ne pond pas d\'oeufs';
    }
}

trait Quadrupede
{
    public function quadrupede(): string
    {
        return 'L\'animal a quatre pattes';
    }
}

trait Ramper
{
    public function ramper(): string
    {
        return 'L\'animal peut ramper';
    }
}

trait Nager
{
    public function nager(): string
    {
        return 'L\'animal peut nager';
    }
}

trait Marcher
{
    public function marcher(): string
    {
        return 'L\'animal peut marcher';
    }
}

class PoissonRouge implements EtreVivant, Renseignement
{
    use Pondre, Nager;

    public function respirer(): string
    {
        return 'Le poisson rouge respire';
    }
    public function manger(): string
    {
        return 'Le poisson rouge mange';
    }
    public function dormir(): string
    {
        return 'Le poisson rouge dort';
    }
    public function boire(): string
    {
        return 'Le poisson rouge boit';
    }
    public function espece(): string
    {
        return 'Le poisson rouge est d\'espece poisson';
    }
    public function sexe(): string
    {
        return 'Le poisson rouge est de sexe masculin';
    }
    public function age(): string
    {
        return 'Le poisson rouge a 1 an';
    }
    public function afficherDetails(): string
    {
        return "<p>{$this->respirer()}</p>
                <p>{$this->dormir()}</p>
                <p>{$this->manger()}</p>
                <p>{$this->boire()}</p>
                <p>{$this->espece()}</p>
                <p>{$this->sexe()}</p>
                <p>{$this->age()}</p>
                <p>{$this->pondre()}</p>
                <p>{$this->nager()}</p>";
    }

}
$PoissonRouge = new PoissonRouge();
echo $PoissonRouge->afficherDetails();

echo '<br>'; 
echo '<br>';


class Chien implements EtreVivant, Renseignement
{
    use Vivipare, Ramper, Quadrupede, Nager, Marcher;

    public function respirer(): string
    {
        return 'Le chien respire';
    }
    public function manger(): string
    {
        return 'Le chien mange';
    }
    public function dormir(): string
    {
        return 'Le chien dort';
    }
    public function boire(): string
    {
        return 'Le chien boit';
    }
    public function espece(): string
    {
        return 'Le chien est d\'espece chien';
    }
    public function sexe(): string
    {
        return 'Le chien est de sexe masculin';
    }
    public function age(): string
    {
        return 'Le chien a 1 an';
    }
    public function afficherDetails(): string
    {
        return "<p>{$this->respirer()}</p>
                <p>{$this->dormir()}</p>
                <p>{$this->manger()}</p>
                <p>{$this->boire()}</p>
                <p>{$this->espece()}</p>
                <p>{$this->sexe()}</p>
                <p>{$this->age()}</p>
                <p>{$this->vivipare()}</p>
                <p>{$this->ramper()}</p>
                <p>{$this->quadrupede()}</p>
                <p>{$this->nager()}</p>
                <p>{$this->marcher()}</p>";
    }

}
$chien = new Chien();
echo $chien->afficherDetails();