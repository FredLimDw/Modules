<?php

interface Publieur 
{
    public function publier();
}

abstract class Document
{
    protected $titre; //comme il y a héritage il faut mettre protected, pour que les enfants puisse hériter et donc récuperer la propriété
    protected $auteur;
    const MIN_PAGES = 50;

    public function __construct(string $titre, string $auteur)
    {
        $this->titre=$titre;
        $this->auteur=$auteur;
    }

    public function getTitre():string 
    {
        return $this->titre;
    }
    public function setTitre(string $titre) // attribuer une valeur à ma propriété. Variable = valeur
    {
        $this->titre = $titre;
    }

    public function getAuteur()
    {
        return $this->auteur;
    }
    public function setAuteur(string $auteur)
    {
        $this->auteur = $auteur;
    }
    
    abstract public function afficherInfos();
}

class Livre extends Document implements Publieur //il n'est pas demandé de faire un getteur et setteur donc ca sous entend qu'il faut faire un constructeur pour récupérer l'héritage titre et auteur
{
    private $nbPages; 

    public function __construct(string $titre, string $auteur, int $nbPages)
    {
        parent::__construct($titre, $auteur);
        // Si la variable $nbPages(argument) est un nombre <p à la valeur de la constante MIN_PAGES(50) alors la propriété $nbPages aura pour valeur celle de la constante
        //Sinon la propriété $nbPages aura pour valeur l'argument $nbPages

        if($nbPages < Document::MIN_PAGES){//une constante s'appelle depuis la class, donc ici depuis Document
            $this->nbPages= Document::MIN_PAGES;
        }else{
            $this->nbPages =$nbPages;
        }
       /* Autre facons d'écrire le if et else en version simplifié :
        $this->nbPages = $nbPages<p self::MIN_PAGES ? self::MIN_PAGES : $nbPages;

        Condition ternaire
        L'obligation est d'avoir un IF et un ELSE
        On écrit 

        */

    }


    public function afficherInfos()
    {
        return '<p>Livre : ' . $this->titre . '</p>
                <p>Auteur : ' . $this->auteur . '</p>
                <p>Nombre de pages : ' . $this->nbPages . '</p>';
    }

    public function publier():string
    {
        return "<h3>Le livre {$this->titre} de l'auteur {$this->auteur} est publié avec un nombre de {$this->nbPages} pages</h3> ";
    }
}

trait FormateurTitre
{
    public function formaterTitreMajuscule(): string
    {
        return strtoupper($this->titre);
    }
}

class Article extends Document implements Publieur
{
    use FormateurTitre;

    private string $contenu;

    public function __construct(string $titre, string $auteur, string $contenu)
    {
        parent::__construct($titre, $auteur);
        $this->contenu = $contenu;
    }


    public function publier()
    {
       return "L'article {$this->formaterTitreMajuscule()} de l'auteur {$this->auteur} est publié avec le contenu {$this->contenu}"; 
    }
    public function afficherInfos()
    {
        return '<p>Article : ' . $this->titre . '</p>
                <p>Auteur : ' . $this->auteur . '</p>
                <p>Nombre de pages : ' . $this->contenu. '</p>';
    }
}

class Bibliotheque
{
    public static function compterCracteres($argumentTexte): int
    {
        return strlen($argumentTexte); // comme ca va compter les caractere je crée donc un argument, là par exemple texte mais ca aurait pu etre n'importe quel autre nom
    }
}
final class Encyclopedie extends Document implements Publieur
{
    private string $edition;
    
    public function __construct(string $titre, string $auteur, string $edition)
    {
        parent::__construct($titre, $auteur);
        $this->edition = $edition;
    }


    public function publier(): string
    {
        return "L'encyclopédie {$this->titre}, édition {$this->edition} de l'auteur {$this->auteur} a été publié";
    }
    public function afficherInfos()
    {
        return '<p>Encyclopédie : ' . $this->titre . '</p>
                <p>Auteur : ' . $this->auteur . '</p>
                <p>Nombre de pages : ' . $this->edition. '</p>';
    }
}

$livre = new Livre('Les misérables', 'Victor Hugo', 500);
echo $livre->publier();
echo $livre->afficherInfos();
echo '<h2>Nombre de caractère dans le livre : '.  Bibliotheque::compterCracteres($livre->GetTitre());

echo '<hr>';

$article = new Article('Actu jeux videos', 'Jean Doe', 'blablabla blabla blabla blabla bla');
echo $article->publier();
echo $article->afficherInfos();
echo '<h2>Nombre de caractère dans le livre : '.  Bibliotheque::compterCracteres($livre->GetTitre());

echo '<hr>';

$encyclopedie = new Encyclopedie ('L\'Encyclopédie des sciences' , 'Isaac Newton', 'edition blabla');
echo $encyclopedie->publier();
echo $encyclopedie->afficherInfos();

echo '<hr>';

