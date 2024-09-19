<!-- Une class est un regroupement d'information qui contient des variables; constants; fonctions. Exemple : pdo concerne que la connexion à la bdd. En clair c'est un regroupement d'informations. Autre exemple Datetime qui ne va concerné que les dates. 
 Une class ne s'utilise pas directement, c'est un moule, un model. Ca contient une structure et si on a besoin de l'utiliser on va générer une instance (objet) qui va hériter de tout ce qu'il y a dans la class  -->

 <?php
 /*
 Une class est un regroupement d'informations, on peut retrouver :
    - propriétés ($variables)
    - méthodes (fonctions)
    - constantes

Le contenu de la class aborde le même sujet 
exemple :   la class PDO aborde le sujet de la base de données
            la class DateTime aborde le sujet de la date et du temps

On utilise pas directement la class, celle-ci est un modèle
On génère une instance/objet de la class (un exemplaire)
On peut créer autant d'objet qu'on a
Un objet hérite de toutes les informations de la class

Pour générer la syntaxe est avec le mot-clé 'new'
exemple : $objet = new Class

Les informations (propriétés/méthodes) ont une visibilité, (il y en a trois différentes) :
    private - Elle n'est accessible que dans la class
    protected - Propre à l'héritage
    public - Accessible à tous c'est à dire depuis l'objet, dans la class et héritière

    On distingue 3 'localisations' :
    -dans la class
    -dans la class héritière
    -dans l'objet

La visibilité private est accessible que depuis la class
La visiblité protected est accesssible dans la class et les class héritières
la visibilité oublic est accessible dans la class, les class héritières et les objets

Elles derterminent l'accessibilités 
 */

class Voiture
{
    public $marque; 
    private $carburant = 'essence';

    public function demarrage(){
        return 'voiture allumée';
    }
    private function turbo(){
        return 'turbo';
    }

    public function info(){
        return 'la marque du véhicule est ' . $this->carburant;
        // $this sera étudié dans un prochain chapitre
    }
}

$voiture1 = new Voiture();

// echo $voiture1; <- Ne pas faire car on ne peut pas afficher un objet sur le navigateur, car un objet est un ensemble d'information alors qu'après echo on ne peut afficher qu'UNE seul information
//Pour accéder à une information d'un objet il faut faire : -> (petite flèche). On ne le verra qu'après un objet

//Affectation
$voiture1->marque = 'audi'; // A mon objet $voiture1, je suis allé à la propriété marque pour lui affecter la valeur 'audi'
//Affichage
echo 'la voiture 1 est de la marque ' . $voiture1->marque;
echo '<br>';
echo $voiture1->info();





?>
