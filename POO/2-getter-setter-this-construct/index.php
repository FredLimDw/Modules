<?php

/*class Etudiant
{
    public $prenom; 
    public $nom;
}

$etudiant1 = new Etudiant();
$etudiant1->prenom = 'jean';
$etudiant1->nom = 'bal';

echo 'l\étudiant 1 s\'appelle ' . $etudiant1->prenom . ' ' . $etudiant1->nom;*/

/* Créer le getter et le setter de la propriété nom
Dans l'objet 1 définir un nom et l'afficher
ecrire une phrase sur l'étudiant 1
Créer un nouvel objet étudiant2; définir nom et prenom et afficher la phrase*/

// créer une méthode (fonction) info qui retourne la phrase : l'étudiant s'appelle ....



Class Etudiant 
{
    private $prenom;
    private $nom;

    /*
    Il existe des méthodes magiques, elles sont reconnaissables par la syntaxe __nomMethodes
    Elles commmencent par 2 underscores
    La mathode __construct est exécutée lors de la création des objets
    Elle n'est pas obligatoire et il  peut n'y en avoir qu'une
    */

    public function __construct(string $prenom = null, $nom = null)
    {
        $this->prenom = $prenom;
        $this->nom =$nom;
    }

    /**/

    //Afficher la propriété prénom    
    /**
     * getPrenom() permet d'afficher la valeur de la propriété prenom
     *
     * @return string
     */
    public function getPrenom() :string // On définit le type, là que ca va retourner un string et non un tableau ou quoi
    {
        return $this->prenom; // $this veut dire : Dans la class tu me cherches la propriété prenom
    }
    
    // attribuer une valeur à la propiété prenom    
    /**
     * setPrenom() permet d'attribuer une valeur à la propriété prenom
     *
     * @param  mixed $argumentPrenom
     * @return void
     */
    public function setPrenom(string $argumentPrenom) :void
    {
        $this->prenom = $argumentPrenom;
    }

    public function getNom() :string
    {
        return $this->nom;
    }

    public function setNom(string $argumentNom) :void
    {
        $this->nom = $argumentNom;
    }
    public function info(): string
    {
        return 'L\'étudiant s\'appelle ' . $this->prenom . ' ' . $this->nom;
    }

}

$etudiant1 = new Etudiant();
$etudiant1->setPrenom('jean');
echo $etudiant1->getPrenom();
echo '<br>';
$etudiant1->setNom('bal');
echo $etudiant1->getNom();
echo '<br>';

echo 'Le nom de l\'étudiant N1 est ' . $etudiant1->getNom() . ' ' . 'et son prenom est ' . $etudiant1->getPrenom();
echo '<br>';
echo $etudiant1->info();

echo '<br>';

$etudiant2 = new Etudiant('Paul', 'Icier'); //voir ligne 36 à 40 - method magique __construct

echo $etudiant2-> info();

echo '<br>';

$etudiant3 = new Etudiant ('Marc', 'Age'); //voir ligne 36 à 40 - method magique __construct
echo $etudiant3-> info();




/*
    $objet->propriété
    $objet->methode()

    Les propriétés prenom et nom de visibilité privée, autrement dit elles ne sont qu'accessible que depuis la class elle-même

    Pour pouvoir afficher ou attrivuer des valeurs à ses propriétés depuis l'objet, on utulisera des getters et des setters

    getteur : afficher
    setteur : attribuer

        COMMENT BIEN ECRIRE UNE METHODE
    - Commenter
    - nom explicite (de préférence en aglais)
    - typer





*/










?>