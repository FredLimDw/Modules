###### Intro à la programmation

# Les conditions

## Introduction

Avec les boucles, les conditions sont, en programmation, l'un des principaux piliers sans lesquels il serait impossible (ou presque) d'écrire le moindre programme informatique. Il existe plusieurs façons de créer des conditions, mais le principe est toujours le suivant : conditionner une certaine partie du code à un test qui peut s'avérer `vrai`, ou `faux`.

## Le `SI ... ALORS...`

C'est la façon la plus simple, et la plus courante, de créer une condition. Le code, contenu à l'intérieur, sera exécuté *SI* le test est un succès.

**Exemple :**
```
DEMANDER nombre
SI (nombre > 0) ALORS
    AFFICHER "Le nombre est positif"
FIN SI
```

Comme vous le voyez, c'est simple, si et seulement si le nombre saisi par l'utilisateur est supérieur à zéro, on affiche *"Le nombre est positif"*. Sinon, rien ne se passera.

**En PHP :**
```PHP
$nombre = readline('Tapez un nombre : ');
if($nombre > 0) {
    echo 'Le nombre est positif.';
}
```

Testez le code et jouez un peu avec.

### Les opérateurs de comparaison

Les opérateurs de comparaison sont au nombre de six que voici :

- `a == b` : teste si `a` et `b` sont égaux. **Attention !** Il ne faut pas confondre avec le simple signe `=` qui sert à affecter à `a`, la valeur de `b`.
- `a != b` : teste si `a` et `b` sont inégaux. Retenez ceci, en informatique, dans de très nombreux languages, le signe `!` signifie *non* ou *pas*.
- `a > b` : test si `a` est strictement supérieur à `b`.
- `a < b` : test si `a` est strictement inférieur à `b`.
- `a >= b` : test si `a` est supérieur ou égal à `b`.
- `a <= b` : test si `a` est inférieur ou égal à `b`.

**Exemple :**

```PHP
$nombre = readline('Tapez un nombre : ');
if($nombre != 0) {
    echo 'Le nombre est n\'est pas nul.';
}
```

### Les opérateurs logiques

Il est possible de combiner plusieurs tests dans une condition en utilisant les opérateurs `ET` et `OU`. Ceci permet de créer des conditions beaucoup plus complexes.

**Exemple :**
```
DEMANDER nombre
SI (nombre >= 0 ET nombre <= 100) ALORS
    AFFICHER "Le nombre est compris entre 0 et 100"
FIN SI
```

**Ou :**
```
DEMANDER nombre
SI (nombre < 0 OU nombre > 100) ALORS
    AFFICHER "Le nombre n'est pas compris entre 0 et 100"
FIN SI
```

De plus, on peut regrouper les conditions ensembles avec des parenthèses `( )` pour créer des conditions encore plus complexes.

**Exemple :**
```
DEMANDER a
DEMANDER b
SI ((a > 0 ET b > 0) ET (a == 5 OU b == 5)) ALORS
    AFFICHER "a et b sont tous les deux positifs et l'un des deux vaut 5"
FIN SI
```

En PHP, on note le `ET` en utilisant `&&` et on note le `OU` en utilisant `||`. 

**Exemple PHP :**
```PHP
$a = readline('Tapez un nombre : ');
$b = readline('Tapez un nombre : ');
if(($a > 0 && $b > 0) && ($a == 5 || $b == 5)) {
    echo 'a et b sont tous les deux positifs et l\'un des deux vaut 5';
}
```

### La clause `SINON`

Notre programme affiche "Le nombre est positif." si celui-ci est effectivement positif, pour lui faire afficher aussi un message lorsqu'il est négatif, il suffit d'ajouter une clause `SINON` à notre `SI`.

**Exemple :**
```
DEMANDER nombre
SI (nombre > 0) ALORS
    AFFICHER "Le nombre est positif"
SINON
    AFFICHER "Le nombre est négatif"
FIN SI
```

En anglais, *'sinon'* ce dit *'else'*.

**Donc, en PHP :**
```PHP
$nombre = readline('Tapez un nombre : ');
if($nombre > 0) {
    echo 'Le nombre est positif.';
} else {
    echo 'Le nombre est négatif.';
}
```

Là aussi, expérimentez avec ce code.

### La clause `SINON SI`

Notre petit programme commence à ressembler à quelque chose, mais il a un gros problème de logique. Voyez-vous lequel ?

Que se passe-t-il si on tape **"0"** ?

Le programme nous dit que le nombre est négatif, ce qui est une erreur.

Pour corriger cela, on va pouvoir rajouter encore une clause `SINON SI` à notre condition de façon à pouvoir gérer plus que seulement deux cas.

Le `SINON SI` permet de créer une nouvelle condition, différente de la première.

**Exemple :**
```
DEMANDER nombre
SI (nombre > 0) ALORS
    AFFICHER "Le nombre est positif"
SINON SI (nombre < 0)
    AFFICHER "Le nombre est négatif"
SINON
    AFFICHER "Le nombre est nul"
FIN SI
```

Ainsi, notre programme teste d'abord si le nombre est supérieur à **0**, sinon, si il est inférieur à **0**, sinon, c'est que ça ne peut être que **0**.

**En PHP :**
```PHP
$nombre = readline('Tapez un nombre : ');
if($nombre > 0) {
    echo 'Le nombre est positif.';
} else if ($nombre < 0) {
    echo 'Le nombre est négatif.';
} else {
    echo 'Le nombre est nul.';
}
```

Là encore, testez ce code et expérimentez avec.

## Le `SELON... CAS... DEFAUT...` (switch... case... default...)

On peut, grâce au `SI... SINON SI... SINON...`, il est possible de créer un grand nombre de conditions en une seule fois. 

Toutefois, on evitera cette solution lorsqu'il y'a plus de deux ou trois cas possibles et on lui préfèrera une solution plus élégante, le `SELON... CAS... DEFAUT...`.

Le principe est le suivant, on va *regarder* une variable pour voir la valeur qui s'y trouve, puis, ensuite on va faire la liste des valeurs que cette variable peut prendre avec un code spécifique pour chaque valeur.

Admettons que l'on souhaite créer un code qui demande à l'utilisateur quel jour de la semaine on est et qui, selon le jour affiche un message différents comme suit :

- lundi : "Moi, j'aime pas les lundis. :("
- mardi : "C'est la semaine. Au boulot !"
- mercredi : idem
- jeudi : idem
- vendredi : "Ouf, bientôt le week-end. :)"
- samedi : "Wouhou !!!!"
- dimanche : idem
- en cas de jour inconnu (mauvaise saisie): "Je ne connais pas ce jour désolé."

Réaliser ceci avec des `SI... SINON SI... SINON...` est tout à fait faisable, mais ce serait laborieux et pas très propre.

On utilse donc le `SELON... CAS... DEFAUT...`.

**Algorithme :**

```
DEMANDER 'Quel jour somme-nous svp ?'
SELON jour
    CAS 'lundi' :
        AFFICHER 'Moi, j'aime pas les lundis. :('
    CAS 'mardi' :
        AFFICHER 'C'est la semaine. Au boulot !'
    CAS 'mercredi' :
        AFFICHER 'C'est la semaine. Au boulot !'
    CAS 'jeudi' :
        AFFICHER 'C'est la semaine. Au boulot !'
    CAS 'vendredi' :
        AFFICHER 'Ouf, bientôt le week-end. :)'
    CAS 'samedi' :
        AFFICHER 'Wouhou !!!!'
    CAS 'dimanche' :
        AFFICHER 'Wouhou !!!!'
    DEFAUT :
        AFFICHER 'Je ne connais pas ce jour désolé.'
FIN SELON
```

Voilà une belle énumération de possibilités bien propre, en tout cas, beaucoup plus propre que si on avait voulut utiliser des `SI... SINON SI...`

**Voyons ce que cela donne en PHP :**

```PHP
$jour = readline('Quel jour somme-nous svp ? ');

switch ($jour){
    case 'lundi' : 
        echo 'Moi, j\'aime pas les lundis. :(';
        break;
    case 'mardi' : 
        echo 'C\'est la semaine. Au boulot !';
        break;
    case 'mercredi' : 
        echo 'C\'est la semaine. Au boulot !';
        break;
    case 'jeudi' : 
        echo 'C\'est la semaine. Au boulot !';
        break;
    case 'vendredi' : 
        echo 'Ouf, bientôt le week-end. :)';
        break;
    case 'samedi' : 
        echo 'Wouhou !!!!';
        break;
    case 'dimanche' : 
        echo 'Wouhou !!!!';
        break;
    default : 
        echo 'Je ne connais pas ce jour désolé.';
        break;
}
```

**Quelques notes importantes :**
- **A propos des tests :** lorsque vous faites un algorithme avec de multiples possibilités, vous devez, lors de vos tests, penser à toujours bien tester toutes les possibilités. Ici, il ne s'agit pas de se dire "j'ai testé le lundi et le mardi, donc c'est bon, le reste va marcher aussi". Non, il faut TOUT tester.
- **La clause `default`** : il en faut toujours une, même si elle ne fait rien de spécial, elle est absolument obligatoire, l'oublier pourrait planter le programme dans des cas exceptionnels que vous auriez oublié (effet de bord).
- **les `break`** : ils sont aussi obligatoires, ils marquent la fin d'un code dans un `case` avant de passer au `case` suivant.

## Simplification de l'algorithme

Le précédent programme est déjà très bien, mais, en vérité, il est possible de simplifier un `SELON... CAS...`. 

En effet, lorsque plusieurs `cas` doivent exécuter le même code, on peut les regrouper comme suit :

**Algorithme :**

```
DEMANDER 'Quel jour somme-nous svp ?'
SELON jour
    CAS 'lundi' :
        AFFICHER 'Moi, j'aime pas les lundis. :('
    CAS 'mardi' :
    CAS 'mercredi' :
    CAS 'jeudi' :
        AFFICHER 'C'est la semaine. Au boulot !'
    CAS 'vendredi' :
        AFFICHER 'Ouf, bientôt le week-end. :)'
    CAS 'samedi' :
    CAS 'dimanche' :
        AFFICHER 'Wouhou !!!!'
    DEFAUT :
        AFFICHER 'Je ne connais pas ce jour désolé.'
FIN SELON
```

**En PHP :**

```PHP
$jour = readline('Quel jour somme-nous svp ? ');

switch ($jour){
    case 'lundi' : 
        echo 'Moi, j\'aime pas les lundis. :(';
        break;
    case 'mardi' : 
    case 'mercredi' : 
    case 'jeudi' : 
        echo 'C\'est la semaine. Au boulot !';
        break;
    case 'vendredi' : 
        echo 'Ouf, bientôt le week-end. :)';
        break;
    case 'samedi' : 
    case 'dimanche' : 
        echo 'Wouhou !!!!';
        break;
    default : 
        echo 'Je ne connais pas ce jour désolé.';
        break;
}
```

