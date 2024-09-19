<?php

abstract class Individu
{

    public function manger()
    {

    }

    public function boire()
    {

    }

    public function dormir()
    {

    }
    abstract public function prenom();

}

class Homme extends Individu
{
    public function prenom()
    {

    }
}

Class Femme extends Individu
{
    public function prenom()
    {

    }
}

/*
    Une class abstract ne peut être instanciée (on ne peut pas créer d'objet issu de cette class)
    Une class abstract peut contenir des methodes abstract, cependant elles sont déclarées sans accolades (il n'y a pas de contenu). En effet le contenu sera déclaré obligatoirement chez les enfants. 
    Ici le parent est animal abstract public function nomdelafonction(); 
    Les enfants sont Homme et Femme
    L'intérêt est que les class enfants ont l obligation de décalrer cette méthode abstract
    Atention une methode abstract ne peut être que dans une class abstract mais une class abstract peut ne pas contenir de méthode abstract donc une classe abstract peut contenir des méthodes normales

*/