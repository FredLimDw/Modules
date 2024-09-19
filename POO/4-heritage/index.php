<?php
/*
Une class peut hériter d'une autre class*
On peut les différencier en les appelant class mère et classe fille
Pour ça on utulise le terme extends

*/

Class Animal 
{
    private $propertyPrivate = 'Property private';
    protected $propertyProtected = 'Property protected';
    public $propertyPublic = 'Property public';

    public function manger()
    {
        return 'je mange';
    }

    public function dormir()
    {
        return 'ZzZzzZZzz';
    }
}

// La class Chien (fille) hérite de tout ce qui se trouve dans la class Animal (mère)
Class Chien extends Animal
{
    public function aboyer()
    {
        
    }

    public function manger()
    {
        //surchargement
        return parent::manger() . ' un os';
    }
    

    public function getPropertyProtected()
    {
        return $this->propertyProtected;
    }

    // public function getPropertyPrivate()
    // {
    //     return $this->propertyPrivate;
    // }

}

Class Chiot extends Chien 
{

}

Class Chat extends Animal
{

    public function miauler()
    {
        
    }

    public function manger()
    {
        return parent::manger() . ' une souris';
    }

}


$chien1 = new Chien();
echo $chien1->propertyPublic;
echo '<br>';
//echo $chien1->getPropertyPrivate();
echo '<br>';
echo $chien1->getPropertyProtected();
echo '<br>';
echo $chien1->manger();

echo '<br>';
$chat1 = new Chat();
echo $chat1->dormir();

echo '<br>';
$chiot1 = new Chiot();
echo $chiot1->manger();

echo '<br>';
echo '<br>';

//Heritage extends, Claa B peut hériter de Class A sans extends, avec la fonction recuperation.

Class A 
{
    public function bonjour(): string
    {
        return 'bonjour';
    }

}

Class B
{
    public $a;

    public function __construct() // avec cette fonction A devient donc un objet. Un objet peut contenir un objet
    {
        $this->a = new A();
    }

    public function recuperation()
    {
        return $this->a->bonjour();
    }
}
$b = new B();
echo $b->recuperation();