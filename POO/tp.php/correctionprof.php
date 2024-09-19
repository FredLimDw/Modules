<?php 


interface Publieur 
{
    public function publier(): string;
}

abstract class Document
{
    protected string $titre;
    protected string $auteur;
    const MIN_PAGES = 50;

    public function __construct(string $titre, string $auteur)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
    }

    /**
     * getTitre() permet de retourner la valeur de la propriété titre
     *
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * setTitre() permet d'attribuer une valeur à la propriété titre
     *
     * @param string $titre
     * @return void
     */
    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }

    public function getAuteur(): string
    {
        return $this->auteur;
    }

    public function setAuteur(string $auteur): void
    {
        $this->auteur = $auteur;
    }

    abstract public function afficherInfos(): string;

}

class Livre extends Document implements Publieur
{

    private int $nbPages;

    public function __construct(string $titre, string $auteur, int $nbPages)
    {
        parent::__construct($titre, $auteur);

        // si la variable $nbPages (argument) est un nombre strictement inférieur à la valeur de la constante MIN_PAGES(50) alors la propriété $nbPages aura pour valeur celle de la constante
        // sinon la propriété $nbPages aura pour valeur l'argument $nbPages

        if ($nbPages < self::MIN_PAGES) {
            $this->nbPages = self::MIN_PAGES;
        } else {
            $this->nbPages = $nbPages;
        }

        /*
            Condition ternaire 
            l'obligatoire est d'avoir un IF et un ELSE

            on écrit l'instruction de la condition suivi d'un ? 
            ce qui suit le ? est le code executé lorsqu'on rentre dans le IF
            Après les : c'est le code executé si on rentre dans le ELSE

        */
        // $this->nbPages = $nbPages < self::MIN_PAGES ? self::MIN_PAGES : $nbPages; 
        
    }


    public function afficherInfos(): string
    {
        
        return '<p>Livre : ' . $this->titre . '</p>
                <p>Auteur : ' . $this->auteur . '</p>
                <p>Nombre de pages : ' . $this->nbPages . '</p>';
    }

    public function publier(): string
    {
        return "<h3>Le livre {$this->titre} de l'auteur {$this->auteur} est publié avec un nombre de {$this->nbPages} pages</h3>";
    }
}

trait FormatteurTitre
{
    public function formaterTitreMajuscule(): string
    {
        return mb_strtoupper($this->titre);
    }
}


class Article extends Document implements Publieur
{
    use FormatteurTitre;
    

    private string $contenu;

    public function __construct(string $titre, string $auteur, string $contenu)
    {
        parent::__construct($titre, $auteur);
        $this->contenu = $contenu;
    }

    public function publier(): string
    {
        return "L'article {$this->formaterTitreMajuscule()} de l'auteur {$this->auteur} est publié avec le contenu {$this->contenu}";
    }

    public function afficherInfos(): string
    {
        return '<p>Article : ' . $this->titre . '</p>
                <p>Auteur : ' . $this->auteur . '</p>
                <p>Contenu : ' . $this->contenu . '</p>';
    }
}

class Bibliotheque
{
    public static function compterCaracteres(string $texte): int
    {
        return strlen($texte);
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

    public function afficherInfos(): string
    {
        return '<p>Encyclopédie : ' . $this->titre . '</p>
                <p>Auteur : ' . $this->auteur . '</p>
                <p>Édition : ' . $this->edition . '</p>';
    }
}

$livre = new Livre('Les misérables', 'Victor Hugo', 500);
echo $livre->publier();
echo $livre->afficherInfos();
echo '<h2>Nombre de caractères dans le livre : ' . Bibliotheque::compterCaracteres($livre->getTitre()) . '</h2>';

echo '<hr>';

$article = new Article('Actualités sur les jeux vidéos', 'Paul icier', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa voluptatibus deleniti at aspernatur eum sed doloremque eligendi quasi delectus cum?');
echo $article->publier();
echo $article->afficherInfos();
echo '<h2>Nombre de caractères dans l\'article : ' . Bibliotheque::compterCaracteres($article->getTitre()) . '</h2>';


echo '<hr>';

$encyclopedie = new Encyclopedie('L\'encyclopédie des sciences', 'Isaac Newton', 'blabla');
echo $encyclopedie->publier();
echo $encyclopedie->afficherInfos();
echo '<h2>Nombre de caractères dans l\'encyclopédie : ' . Bibliotheque::compterCaracteres($encyclopedie->getTitre()) . '</h2>';





/*

    TP bibliotheque
    ---------------

    Création de l'interface Publieur

        > Cette interface va définir une méthode publier() que toutes les entités capables de publier (livres, articles) devront implémenter.


    Création d'une classe abstraite Document

        > Cette classe abstraite sera la base des classes qui représenteront différents types de documents. Elle contiendra des propriétés communes comme le titre et l'auteur, ainsi qu'une constante (MIN_PAGES) pour le nombre minimum de pages.

        > Implémentez un constructeur pour cette classe, et des méthodes getter et setter pour les propriétés.

        > Créer une méthode afficherInfos() qui sera obligatoirement déclarée dans les class enfants


    Création de la classe Livre qui étend Document

    > Cette classe représente un livre. Elle ajoute des propriétés spécifiques comme le nombre de pages et implémente la méthode publier() de l'interface Publieur.

    
        > Pour information, dans la méthode publier on retounr une phrase de type : le livre **titre du livre** de **auteur** est publié avec un nombre de **nombre de pages** pages
        et pour la méthode afficherInfos on s'attend plutôt à une association : 
            livre : ****
            auteur : ****
            nombre de pages : ****



        > Utilisez la constante MIN_PAGES pour valider le nombre de pages.
            Si l'argument du nombre de pages est inférieur à la constante vous devez définir la constante comme valeur à la propriété sinon c'est l'argument à insérer


    Création d'un Trait pour l'édition
        > Créer un trait FormatteurTitre qui va contenir une méthode formaterTitreMajuscule() permettant de formater le titre d'un document en majuscules.

    Utilisation du Trait dans la classe Article
        > Créer une classe Article qui hérite de Document et implémente l'interface Publieur. Elle doit utiliser le trait FormatteurTitre
        > Elle contient une propriété contenu
        > Pour information, dans la méthode publier on retounr une phrase de type : l'article ** titre en MAJUSCULE ** de **auteur** est publié avec pour contenu **contenu**
        et pour la méthode afficherInfos on s'attend plutôt à une association : 
            article : ****
            auteur : ****
            contenu : ****

    Ajout d'une méthode static dans une classe Bibliotheque
        > Créer une classe Bibliotheque qui contient une méthode static compterCaracteres() permettant de compter le nombre de caractères d'un contenu donné.


    Création d'une classe finale Encyclopedie
        > Créer une classe finale Encyclopedie qui hérite de Document et implémente Publieur. Cette classe ne doit pas pouvoir être étendue. 
        Elle contient une propriété edition
        > Pour information, dans la méthode publier on retounr une phrase de type : l'encyclopédie **encyclopédie**, édition **edition** de **auteur** est publié
        et pour la méthode afficherInfos on s'attend plutôt à une association : 
            Encyclopédie : ****
            auteur : ****
            édition : ****

    --------------------------------------------------------------------------------------------------------------

    Créer un objet livre et afficher les méthodes publier() et afficherInfos()
    Créer un objet article et afficher les méthodes publier() et afficherInfos()
    Créer un objet encyclopedie et afficher les méthodes publier() et afficherInfos()
    Afficher le nombre de caractères dans le contenu du titre de l'article
*/
