###### Intro à la programmation

# Les tableaux

## Concept

En programmation, on appelle *tableau* une **liste de valeurs stockées dans une seule variable** ou constante.

Pour les jours de la semaine, par exemple, on ne va pas stocker chaque jour dans une variable dédiée, on va créée une seule variable `semaine` ou `week`, selon qu'on veuille travailler en français ou anglais, et y mettre les sept jours de la semaine, tous ensembles, stockés dans la même variable. C'est cela, un *tableau*.

Par la suite, on pourra parcourir ce tableau, c'est à dire aller lire les valeurs à l'intérieur, selon nos besoins.

## Déclaration

En anglais, un tableau se dit *"array"*, il existe plusieurs moyens de le créer et de le remplir.

### Méthode académique

En programmation, il existe souvent plusieurs façons de faire la même chose. C'est en particulier le cas pour créer des tableaux.

Aucune des techniques qui suivent ne vaut réellement mieux qu'une autre, cela dépend en général de ce que l'on doit faire. Dans certains algorithmes, certaines formes sont plus simples à manipuler que d'autres, et dans d'autres algorithmes, c'est l'inverse.

#### Académique, mais un peu sale

```PHP
$geeks = array();    // Crée le tableau 'geeks'

$geeks[0] = 'Ada Lovelace';                  // Ajoute un nom à la position 0
$geeks[1] = 'Hedy Lamar';                    // Ajoute un nom à la position 1
$geeks[2] = 'Fran Allen';                    // Ajoute un nom à la position 2
$geeks[3] = 'Alexandra Illmer Forsythe';     // Ajoute un nom à la position 3
$geeks[4] = 'Margaret Hamilton';             // ...
$geeks[5] = 'Grace Hopper';
$geeks[6] = 'Barbara Liskov';
$geeks[7] = 'Sarita Schoenebeck';
```

Ici, on crée d'abord le tableau *'geeks'* avec l'instruction [array()](https://www.php.net/manual/fr/function.array.php).

Ensuite, l'une après l'autre on ajoute les valeurs en précisant après le nom du tableau à quelle position on veut mettre chaque valeur. On précise cette position à l'aide de crochets `[]`;

**Ainsi :**
- `$geeks[0] = 'Ada Lovelace';` ajoute *'Ada Lovelace'* à la position 0 du tableau
- `$geeks[5] = 'Grace Hopper';` ajoute *'Grace Hopper'* à la position 5 du tableau 

Cette position s'appelle *l'index*. Et, oui, ***l'index* commence à 0.**

> On dit que l'on apprend à un enfant à compter jusqu'à 10. C'est une erreur de langage. En vérité, on lui apprend à compter de 0 à 9, puis à mettre un '1' devant et recommencer.

L'ordinateur prend ce principe au pied de la lettre.

Lorsqu'on lui demande de créer une liste de **huit valeurs**, comme dans notre exemple, cette liste **commence à 0 et va jusqu'à 7.**

Une liste de dix valeurs ira de 0 à 9, une de mille valeurs, de 0 à 999. Vous avez compris le principe.

Du coup, le développeur fera toujours très attention lorsqu'il lit les données dans un tableau, à bien démarrer à partir de 0, et surtout, surtout, à s'arrêter avant de dépasser la dernière valeur. Sans quoi c'est le *dépassement mémoire*, aussi appelé *"dépassement de pile"*, ou encore, bien plus connu : le *"stack overflow"*. Oui, le nom du site vient de là.

Nous reparlerons de cela lorsque nous verront comment ont lit les données dans un tableau.

#### Académique propre

En PHP (et dans de nombreux autres langages) ***array*** permet de créer ce que l'on appelle des *objets* de type ***Array***, vous en verrez beaucoup plus sur le sujet lorsque nous parlerons de la *P.O.O.* (*Programmation Orientée Objet*). 


Or, il existe une fontion de **Array** très pratique pour ajouter de nouveau éléments dans la liste : [array_push()](https://www.php.net/manual/fr/function.array-push.php).

**Exemple :**

```PHP
$geeks = array();     // Crée le tableau 'geeks'

array_push($geeks, 'Ada Lovelace');                 // Ajoute un nom à la fin de la liste (0 si liste vide)
array_push($geeks, 'Hedy Lamar');                   // Ajoute un nom à la fin de la liste 
array_push($geeks, 'Fran Allen');                   // Ajoute un nom à la fin de la liste
array_push($geeks, 'Alexandra Illmer Forsythe');    // Ajoute un nom à la fin de la liste
array_push($geeks, 'Margaret Hamilton');            // ...
array_push($geeks, 'Grace Hopper');
array_push($geeks, 'Barbara Liskov');
array_push($geeks, 'Sarita Schoenebeck');
```

Là, on a un code beaucoup plus propre.

En effet, lorsque l'on écrit les *indices* à la main comme dans l'exemple précédent, on s'expose à des problèmes potentiels :

- que se passerait-il si, par exemple, il y avait déjà des données dans notre tableau ? Elles seraient écrasées par les nouvelles. Ce qui n'est pas forcément souhaitable.
- et si on me demandait d'ajouter un nom entre *'Hedy Lamar'* et *'Fran Allen'* ? Il faudrait renuméroter tous les suivants.

Bref, ce n'est vraiment pas l'idéal.

En utilisant la fonction [array_push()](https://www.php.net/manual/fr/function.array-push.php), on ajoute des données à la fin du tableau, à la queue leu leu. En fait, l'image la plus pertinente est celle de la pile d'assiettes. À chaque nouvel usage de [array_push()](https://www.php.net/manual/fr/function.array-push.php), vous ajoutez une assiette sur le dessus de la pile. D'ailleurs le terme geek officiel pour désigner un tableau est une *'pile'* et remplir ce tableau par la fin s'est *'empiler'*.

Donc, pour en revenir à notre exemple, à chaque appel à la méthode [array_push()](https://www.php.net/manual/fr/function.array-push.php), on empile un nouveau nom au dessus des autres. Et le programme se débrouille tout seul pour numéroter les éléments correctement.

![Attention au stack overflow](./assets/img/03/stack-overflow.jpg)

#### Académique vraiment propre

Il est également possible de créer directement le tableau avec ses valeurs.

Dans ce cas, on va juste lister les valeurs à l'intérieur des parenthèses lors du `array()`, en les séparant avec des virgules `,`, comme ceci :

```PHP
// Crée le tableau 'geeks' en le remplissant de valeurs directement
$geeks = array('Ada Lovelace', 'Hedy Lamar', 'Fran Allen', 'Alexandra Illmer Forsythe', '...');
```

Lorsque vous voulez créer un tableau et le remplir directement, c'est une excellente façon de faire. Mais cela va surtout bien pour les tableaux assez petits, sinon, la ligne devient vite trop longue.

#### Académique vraiment vraiment propre

Si on a besoin de spécifier beaucoup de données, mieux vaut opter pour cette mise en forme :

```PHP
// Crée le tableau 'geeks' en le remplissant de valeurs directement
// Mais en plus lisible
$geeks = array(
    'Ada Lovelace', 
    'Hedy Lamar', 
    'Fran Allen', 
    'Alexandra Illmer Forsythe', 
    'Margaret Hamilton',
    'Grace Hopper',
    'Barbara Liskov',
    'Sarita Schoenebeck'
);
```

C'est la même chose que précédemment, mais on va à la ligne après chaque virgule.

> Notez l'indentation (les tabulations) bien propre qui permet une lisibilité parfaite. 
N'oubliez jamais que ce genre d'attention portée à la propreté et à la lisbilité de votre code est aussi l'un des critères primordiaux pris en compte par les recruteurs lors d'une embauche. 

### Méthode raccourcie (*shorthand*)

Il existe une autre façon, plus courte et plus rapide, de créer des tableaux.

Dans de nombreux langages, dont PHP, il arrive que pour effectuer une certaine chose, il existe une méthode alternative plus courte. On appelle cela des *'shorthand'*. Souvenez-vous de ce terme, car il vous servira dans votre carrière pour rechercher des façons plus rapides de faire certaines choses.

Ainsi, en PHP il est possible d'écrire directement ceci :

```PHP
$geeks = [];
```

Ceci équivaut à écrire :

```PHP
$geeks = array();
```

Encore mieux, on peut écrire : 

```PHP
$geeks = [
    'Ada Lovelace', 
    'Hedy Lamar', 
    'Fran Allen', 
    'Alexandra Illmer Forsythe', 
    'Margaret Hamilton',
    'Grace Hopper',
    'Barbara Liskov',
    'Sarita Schoenebeck'    
];
```

Ce qui permet de directement créer un tableau rempli de valeurs.

La grande majorité des développeurs aiment travailler avec cette notation.

## Quelques outils pratiques de manipulation des tableaux

Vous avez déjà vu, plus haut [array_push()](https://www.php.net/manual/fr/function.array-push.php) qui permet d'ajouter des valeurs à la fin d'un tableau, mais il existe tout un ensemble d'autres fonctions qui vont nous permettre de faire tout un tas de choses avec les tableaux.

Voici une courte liste, non exhaustive, de quelques unes de ces fonctions et leurs descriptions.

### count()

[count](https://www.php.net/manual/fr/function.count) permet à tout moment de connaître la taille d'un tableau.

**Exemple :**

```PHP
$geeks = [
    'Ada Lovelace', 
    'Hedy Lamar', 
    'Fran Allen', 
    'Alexandra Illmer Forsythe', 
    'Margaret Hamilton',
    'Grace Hopper',
    'Barbara Liskov',
    'Sarita Schoenebeck'    
];

echo 'Il y a ' . count ($geeks) . ' geeks dans la liste';
```

**Affichera :**

```
Il y a 8 geeks dans la liste
```

Très pratique lorsque l'on veut afficher le nombres d'éléments d'une liste.

Nous verrons aussi, plus tard, comment on utilise [count](https://www.php.net/manual/fr/function.count) pour parcourir le tableau, c'est à dire pour extraire, un à un, les éléments qui le compose.

### array_unshift()

La méthode [array_unshift()](https://www.php.net/manual/fr/function.array-unshift.php) vous permet d'ajouter des éléments en début de tableau. 

**Exemple :**

```php

// Tableau de geeks
$geeks = [
    'Hedy Lamar', 
    'Fran Allen', 
    'Alexandra Illmer Forsythe', 
    'Margaret Hamilton',
    'Grace Hopper',
    'Barbara Liskov',
    'Sarita Schoenebeck'    
];

array_unshift($geeks, 'Ada Lovelace');

print_r($geeks);
```

**Affichera :**

```
Array
(
    [0] => Ada Lovelace
    [1] => Hedy Lamar
    [2] => Fran Allen
    [3] => Alexandra Illmer Forsythe
    [4] => Margaret Hamilton
    [5] => Grace Hopper
    [6] => Barbara Liskov
    [7] => Sarita Schoenebeck
)
```

### array_pop()

La façon la plus simple de se représenter la fonction [array_pop()](https://www.php.net/manual/fr/function.array-pop.php) est de se dire qu'elle fait stricto sensu le contraire de [array_push()](https://www.php.net/manual/fr/function.array-push.php).

On donne une valeur à [array_push()](https://www.php.net/manual/fr/function.array-push.php) qui l'ajoute à la fin du tableau.

Et bien, lorsqu'on appelle [array_pop()](https://www.php.net/manual/fr/function.array-pop.php) elle retire la dernière valeur du tableau et nous la redonne.

**Voyons ce code :**

```php
$geeks = [
    'Ada Lovelace', 
    'Hedy Lamar', 
    'Fran Allen', 
    'Alexandra Illmer Forsythe', 
    'Margaret Hamilton',
    'Grace Hopper',
    'Barbara Liskov',
    'Sarita Schoenebeck'    
];

echo 'Il y a ' . count ($geeks) . ' geeks dans la liste';

$dernier = array_pop($geeks);

echo 'On a retiré ' . $dernier;

echo 'Il y a donc maintenant ' . count ($geeks) . ' geeks dans la liste');
```

**Affichera :**

```
Il y a 8 geeks dans la liste
On a retiré Sarita Schoenebeck
Il y a donc maintenant 7 geeks dans la liste
```

> 💡 Rappelez-vous, plus tôt nous avons dit que *"ajouter à la pile"* avec [array_push()](https://www.php.net/manual/fr/function.array-push.php) c'était *"empiler"*.
Et bien, là, *"retirer de la pile"* avec [array_pop()](https://www.php.net/manual/fr/function.array-pop.php) c'est *"dépiler"*.
Et, non, ce n'est pas une faute. En bon français on devrait dire *"désempiler"*, mais, ici, on ne parle pas en bon français mais en langage *"Geek"*.

### array_shift()

La fonction [array_shift()](https://www.php.net/manual/fr/function.array-shift.php) fonctionne comme  [array_pop()](https://www.php.net/manual/fr/function.array-pop.php), à ceci prêt qu'elle ne retire pas le dernier, mais le premier élément de la liste et elle recalcule (réindèxe) les index du tableau pour qu'ils commencent toujours à 0.

Reprenons le code précédent, mais en remplaçant l'appel à [array_pop()](https://www.php.net/manual/fr/function.array-pop.php) par un appel à [array_shift()](https://www.php.net/manual/fr/function.array-shift.php).

**Comme ceci :**

```php
$geeks = [
    'Ada Lovelace', 
    'Hedy Lamar', 
    'Fran Allen', 
    'Alexandra Illmer Forsythe', 
    'Margaret Hamilton',
    'Grace Hopper',
    'Barbara Liskov',
    'Sarita Schoenebeck'    
];

echo 'Il y a ' . count($geeks) . ' geeks dans la liste';

$dernier = array_shift($geeks);

echo 'On a retiré ' . $dernier;

echo 'Il y a donc maintenant ' . count ($geeks) . ' geeks dans la liste';
```

**Notre code affiche maintenant :**

```
Il y a 8 geeks dans la liste
On a retiré Ada Lovelace
Il y a donc maintenant 7 geeks dans la liste
```

### LIFO VS FIFO

Juste une petite insise pour parler d'un concept important en programmation.

Il arrive, de temps en temps, d'avoir à intégrer dans un programme un système de *"pile"*. C'est à dire un code en deux temps qui, d'un côté, ajoute des éléments dans une liste avant de pouvoir les traiter et, de l'autre, vide cette liste pour en traiter le contenu.

C'est le principe de notre pile d'assiette.

Prenons comme cobaye quelqu'un qui débarrasse la table et qui apporte les assiettes jusqu'au lave-vaisselle.

Cette personne doit bien :

- d'abord empiler les assiettes
- puis aller jusqu'au lave-vaisselle pour les dépiler dans celui-ci

Et bien, si, comme toute personne normalement constituée, notre cobaye prend les assiettes du dessus lorsqu'il les charge dans le lave-vaisselle, c'est à dire utilise [array_pop()](https://www.php.net/manual/fr/function.array-pop.php), il utilise ce que nous, Geeks, appelons la méthode [L.I.F.O.](https://fr.wikipedia.org/wiki/Last_in,_first_out) pour **"Last In First Out"**, et en Français **"Dernier arrivé, premier sorti"**. 

Cette méthode dans laquelle on retire les éléments d'une liste dans l'ordre inverse de leur arrivée est très répendue, parceque très facile à implémenter dans à peu près n'importe quel langage.

**Mais, elle ne convient pas toujours !**

En effet, autant dans notre histoire de lave-vaisselle il n'y a pas trop de risque d'erreur due au [L.I.F.O.](https://fr.wikipedia.org/wiki/Last_in,_first_out) (quoique), autant dans certains types de traitements, cela n'est pas envisageable.

Prenons un autre scénario, bancaire cette fois, et imaginons devoir développer un système de pile pour traiter des opérations bancaires, et ajoutons une contrainte de plus : de nouvelles opérations peuvent tomber à tout moment, sans prévenir, et donc être ajoutées sur le dessus de la pile, mais comme leur traitement est assez lourd, on ne peut pas les exécuter toutes à la fois, d'où notre système de pile qui les enverra en traitement l'une après l'autre.

Que ce passerait-il, selon vous, si l'on utilisait un système [L.I.F.O.](https://fr.wikipedia.org/wiki/Last_in,_first_out) pour traiter les opérations mais que celles-ci arrivent trop vite pour pouvoir complètement vider la pile ?

Et bien, nos toutes premières opérations, celles que nous avions ajouter à la pile tout au début, pourraient très bien ne jamais être traitées, car on arriverait jamais à vider la pile jusqu'à les atteindre avant que de nouvelles opérations n'arrivent et remplissent à nouveau notre pile.

C'est dans ce genre de situations que l'on préfèrera utiliser [array_shift()](https://www.php.net/manual/fr/function.array-shift.php) pour sortir les éléments en commençant toujours par les premiers.

On appelle ceci le système [F.I.F.O.](https://fr.wikipedia.org/wiki/File_(structure_de_donn%C3%A9es)) pour  **"Firt In First Out"**, et en Français **"Premier arrivé, premier sorti"**. 

### array_reverse()

La fonction [array_reverse()](https://www.php.net/manual/fr/function.array-reverse.php) bien pratique puisqu'elle permet d'inverser complètement un tableau. Si l'intérêt n'est pas forcément évident de prime abord, cela s'avère en vérité fondamental dans certains algorithmes. 

**Démonstration :**

```PHP
$geeks = [
    'Ada Lovelace', 
    'Hedy Lamar', 
    'Fran Allen', 
    'Alexandra Illmer Forsythe', 
    'Margaret Hamilton',
    'Grace Hopper',
    'Barbara Liskov',
    'Sarita Schoenebeck'    
];

$geeks = array_reverse($geeks);
print_r ($geeks);
```

**produira la sortie suivante :**

```
Array
(
    [0] => Sarita Schoenebeck
    [1] => Barbara Liskov
    [2] => Grace Hopper
    [3] => Margaret Hamilton
    [4] => Alexandra Illmer Forsythe
    [5] => Fran Allen
    [6] => Hedy Lamar
    [7] => Ada Lovelace
)
```

### array_slice()

[array_slice](https://www.php.net/manual/fr/function.array-slice.php) va vous permettre de trouver un élément, ou plusieurs éléments, à l'intérieur d'un tableau à l'endroit précis où vous le souhaité.

[array_slice](https://www.php.net/manual/fr/function.array-slice.php) ne modifie pas le tableau d'origine et vous donne un nouveau tableau, en plus du premier, contenant les valeurs trouvées.

**Exemple :**

```php
$geeks = [
    'Ada Lovelace', 
    'Hedy Lamar', 
    'Fran Allen', 
    'Alexandra Illmer Forsythe', 
    'Margaret Hamilton',
    'Grace Hopper',
    'Barbara Liskov',
    'Sarita Schoenebeck'    
];

$copy = array_slice($geeks, 3, 2); // copie les élements 3 à 4 du tableau

echo 'Tableau d\'orgine : ';
print_r($geeks);
echo 'Éléments extraits : ';
print_r($copy);
```

**Produit :**

```
Tableau d'orgine : Array
(
    [0] => Ada Lovelace
    [1] => Hedy Lamar
    [2] => Fran Allen
    [3] => Alexandra Illmer Forsythe
    [4] => Margaret Hamilton
    [5] => Grace Hopper
    [6] => Barbara Liskov
    [7] => Sarita Schoenebeck
)
Éléments extraits : Array
(
    [0] => Alexandra Illmer Forsythe
    [1] => Margaret Hamilton
)
```

### array_splice()

[array_splice()](https://www.php.net/manual/fr/function.array-splice.php) est très pratique pour modifier le contenu d'un tableau.

Selon la façon dont vous écrivez votre appel à [array_splice()](https://www.php.net/manual/fr/function.array-splice.php) vous pourrez, au choix :

- supprimer un ou plusieurs éléments de la liste
- modifier un élément dans une liste
- insérer de nouvelles valeurs dans une liste


Cette méthode est assez souple, et permet de réellement faire pas mal de choses :

#### Suppression d'éléments dans un tableau

**Le code suivant :**

```php
$geeks = [
    'Ada Lovelace', 
    'Hedy Lamar', 
    'Fran Allen', 
    'Alexandra Illmer Forsythe', 
    'Margaret Hamilton',
    'Grace Hopper',
    'Barbara Liskov',
    'Sarita Schoenebeck'    
];
// AFFICHE LE TABLEAU D'ORGINE
echo 'Tableau d\'origine :';
print_r($geeks); 
echo ''; // LIGNE VIDE

// RETIRE ET EXTRAIT L'ÉLÉMENT À L'EMPLACEMENT 3 (1 SEUL)
$extractedElement =  array_splice($geeks, 3, 1);

// AFFICHE CE QUI A ÉTÉ RETIRÉ DU TABLEAU 
echo 'J\'ai retiré l\'élément suivant : ';
print_r($extractedElement);
echo ''; // LIGNE VIDE

// AFFICHE LE TABLEAU APRÈS MODIFICATION
echo 'Tableau après modification :';
print_r ($geeks);
```

**Produit la sortie suivante :**

```
Tableau d'origine :Array
(
    [0] => Ada Lovelace
    [1] => Hedy Lamar
    [2] => Fran Allen
    [3] => Alexandra Illmer Forsythe
    [4] => Margaret Hamilton
    [5] => Grace Hopper
    [6] => Barbara Liskov
    [7] => Sarita Schoenebeck
)
J'ai retiré l'élément suivant : Array
(
    [0] => Alexandra Illmer Forsythe
)
Tableau après modification :Array
(
    [0] => Ada Lovelace
    [1] => Hedy Lamar
    [2] => Fran Allen
    [3] => Margaret Hamilton
    [4] => Grace Hopper
    [5] => Barbara Liskov
    [6] => Sarita Schoenebeck
)
```

Notez comme la méthode [array_splice()](https://www.php.net/manual/fr/function.array-splice.php) a bien extrait un tableau contenant la valeur visée.

Le tableau d'origine a été modifié. [array_splice()](https://www.php.net/manual/fr/function.array-splice.php) a retiré une partie du tableau (1 élément à partir de l'élément numéro 3) et nous l'a donné.

**On peut retirer plus d'éléments d'un coup :**

```PHP
$geeks = [
    'Ada Lovelace', 
    'Hedy Lamar', 
    'Fran Allen', 
    'Alexandra Illmer Forsythe', 
    'Margaret Hamilton',
    'Grace Hopper',
    'Barbara Liskov',
    'Sarita Schoenebeck'    
];
// AFFICHE LE TABLEAU D'ORGINE
echo 'Tableau d\'origine :';
print_r($geeks); 
echo ''; // LIGNE VIDE

// RETIRE ET EXTRAIT 3 ÉLÉMENTS À L'EMPLACEMENT 3
$extractedElement =  array_splice($geeks, 3, 3);

// AFFICHE CE QUI A ÉTÉ RETIRÉ DU TABLEAU 
echo 'J\'ai retiré l\'élément suivant : ';
print_r($extractedElement);
echo ''; // LIGNE VIDE

// AFFICHE LE TABLEAU APRÈS MODIFICATION
echo 'Tableau après modification :';
print_r ($geeks);
```

**Produit :**

```
Tableau d'origine :Array
(
    [0] => Ada Lovelace
    [1] => Hedy Lamar
    [2] => Fran Allen
    [3] => Alexandra Illmer Forsythe 
    [4] => Margaret Hamilton
    [5] => Grace Hopper
    [6] => Barbara Liskov
    [7] => Sarita Schoenebeck        
)
J'ai retiré l'élément suivant : Array
(
    [0] => Alexandra Illmer Forsythe 
    [1] => Margaret Hamilton
    [2] => Grace Hopper
)
Tableau après modification :Array
(
    [0] => Ada Lovelace
    [1] => Hedy Lamar
    [2] => Fran Allen
    [3] => Barbara Liskov
    [4] => Sarita Schoenebeck
)
```

Ici, se sont trois éléments qui ont été retirés d'un coup.

#### Modification d'un élément de tableau

**Le code suivant :**

```php
$geeks = [
    'Ada Lovelace', 
    'H.L.', 
    'Fran Allen', 
    'Alexandra Illmer Forsythe', 
    'Margaret Hamilton',
    'Grace Hopper',
    'Barbara Liskov',
    'Sarita Schoenebeck'    
];

print_r($geeks);
array_splice($geeks, 1, 1, 'Hedy Lamar');
print_r($geeks);
```

**Produit la sortie suivante :**

```
Array
(
    [0] => Ada Lovelace
    [1] => H.L.
    [2] => Fran Allen
    [3] => Alexandra Illmer Forsythe
    [4] => Margaret Hamilton
    [5] => Grace Hopper
    [6] => Barbara Liskov
    [7] => Sarita Schoenebeck
)
Array
(
    [0] => Ada Lovelace
    [1] => Hedy Lamar
    [2] => Fran Allen
    [3] => Alexandra Illmer Forsythe
    [4] => Margaret Hamilton
    [5] => Grace Hopper
    [6] => Barbara Liskov
    [7] => Sarita Schoenebeck
)
```

Ce qui se trouvait à l'emplacement *1* (*"H.L."*) a été supprimé et remplacé par la nouvelle valeur *"Hedy Lamar"*.

#### Insertion d'éléments dans un tableau

Enfin, on peut utiliser la méthode [array_splice()](https://www.php.net/manual/fr/function.array-splice.php) pour insérer des valeurs. 

**Voyons ce code :**

```php
$geeks = [
    'Ada Lovelace', 
    'Hedy Lamar', 
    'Fran Allen', 
    'Alexandra Illmer Forsythe',
    'Sarita Schoenebeck'    
];
// AFFICHE LE TABLEAU D'ORGINE
echo 'Tableau d\'origine :';
print_r($geeks);
echo ''; // LIGNE VIDE

// RETIRE L'ÉLÉMENT À L'EMPLACEMENT 3 ET INJECTE DE NOUVEAUX ÉLÉMENTS
$extractedElement =  array_splice($geeks, 3, 1, [ 
        'Alexandra Illmer Forsythe', 
        'Margaret Hamilton', 
        'Grace Hopper', 
        'Barbara Liskov'
    ]
);

// AFFICHE CE QUI A ÉTÉ RETIRÉ DU TABLEAU 
echo 'J\'ai retiré l\'élément suivant : ';
print_r($extractedElement);
echo ''; // LIGNE VIDE

// AFFICHE LE TABLEAU APRÈS MODIFICATION
echo 'Tableau après modification :';
print_r($geeks);
```

**La sortie :**

```
Tableau d'origine :Array
(
    [0] => Ada Lovelace
    [1] => Hedy Lamar
    [2] => Fran Allen
    [3] => Alexandra Illmer Forsythe
    [4] => Sarita Schoenebeck
)
J'ai retiré l'élément suivant : Array
(
    [0] => Alexandra Illmer Forsythe
)
Tableau après modification :Array
(
    [0] => Ada Lovelace
    [1] => Hedy Lamar
    [2] => Fran Allen
    [3] => Alexandra Illmer Forsythe
    [4] => Margaret Hamilton
    [5] => Grace Hopper
    [6] => Barbara Liskov
    [7] => Sarita Schoenebeck
)
```

Ici, notre tableau de départ est beaucoup plus petit, mais nous utilisons [array_splice()](https://www.php.net/manual/fr/function.array-splice.php) pour y insérer les données manquantes.

Notre code extrait (et donc supprime) *"Alexandra Illmer Forsythe"* du tableau, mais la réinjecte aussitôt avec trois autres personnes de plus, ce qui revient à insérer ces trois personnes au milieu de notre tableau.

### array_search()

La fonction [array_search()](https://www.php.net/manual/en/function.array-search.php) est assez explicide, elle vous donnera l'index d'un élément dans le tableau.

**Ainsi :**

```php
$geeks = [
    'Ada Lovelace', 
    'Hedy Lamar', 
    'Fran Allen', 
    'Alexandra Illmer Forsythe', 
    'Margaret Hamilton',
    'Grace Hopper',
    'Barbara Liskov',
    'Sarita Schoenebeck'    
];

$iFound = array_search('Grace Hopper', $geeks);

echo 'J\'ai trouvé Grace Hopper à la position ' . $iFound . ' du tableau';
```

**Produira :**

```
J'ai trouvé Grace Hopper à la position 5 du tableau
```

Bien entendu, là, l'index commence toujours à *0*, donc notre sixième élément est bien à l'index *5*.

La rechercher par [array_search()](https://www.php.net/manual/en/function.array-search.php) ne fonctionne que si vous spécifiez l'élément à trouver en entier et sans erreur.

**Ansi : **

```php
$geeks = [
    'Ada Lovelace', 
    'Hedy Lamar', 
    'Fran Allen', 
    'Alexandra Illmer Forsythe', 
    'Margaret Hamilton',
    'Grace Hopper',
    'Barbara Liskov',
    'Sarita Schoenebeck'    
];

$iFound = array_search('Grace', $geeks);

echo 'J\'ai trouvé Grace Hopper à la position ' . $iFound . ' du tableau';
```

**Produira :**

```
J'ai trouvé Grace Hopper à la position du tableau
```

Le fait que [array_search()](https://www.php.net/manual/en/function.array-search.php) nous retourne une valeur vide signifie que la recherche a échouée, et que *"Grace"* n'est nullepart dans le tableau.

### sort()

Très pratique et très utilisée, la fonction [sort()](https://www.php.net/manual/fr/function.sort.php) permet de trier un tableau.

Par défaut, le tri se fera par ordre alphabétique.

Cela vous suffira la plupart du temps. Vous apprendrez cepandant bientôt à créer votre propre code de tri afin de trier les éléments d'un tableau comme bon vous semble.

**Exemple :**

```php
$geeks = [
    'Ada Lovelace', 
    'Hedy Lamar', 
    'Fran Allen', 
    'Alexandra Illmer Forsythe', 
    'Margaret Hamilton',
    'Grace Hopper',
    'Barbara Liskov',
    'Sarita Schoenebeck'    
];

echo '';
echo 'Tableau avant le tri :';
print_r ($geeks);
echo '';

sort($geeks);

echo 'Tableau après le tri :';
print_r($geeks);
echo '';
```

**Produit le résultat :**

```
Tableau avant le tri :Array
(
    [0] => Ada Lovelace
    [1] => Hedy Lamar
    [2] => Fran Allen
    [3] => Alexandra Illmer Forsythe
    [4] => Margaret Hamilton        
    [5] => Grace Hopper
    [6] => Barbara Liskov
    [7] => Sarita Schoenebeck       
)
Tableau après le tri :Array
(
    [0] => Ada Lovelace
    [1] => Alexandra Illmer Forsythe
    [2] => Barbara Liskov
    [3] => Fran Allen
    [4] => Grace Hopper
    [5] => Hedy Lamar
    [6] => Margaret Hamilton        
    [7] => Sarita Schoenebeck       
)
```

## Entraînez-vous

Le fichier *"03-les-tableaux-depart.php"* contient un tableau *geeks* qui comporte des erreurs.

Des instructions précises sur ce que vous devez faire pour corriger ce tableau se trouvent en commentaire dans le code.

**Voici la sortie attendue :**

```
Voici une liste de femmes geeks :Array
(
    [0] => Ada Lovelace
    [1] => Alexandra Illmer Forsythe
    [2] => Barbara Liskov
    [3] => Fran Allen
    [4] => Grace Hopper
    [5] => Hedy Lamar
    [6] => Margaret Hamilton
    [7] => Sarita Schoenebeck
)
```
