###### Intro à la programmation

# Les boucles

## Introduction

En programmation les boucles permettent de répéter plusieurs fois une partie du code, cela évite d'avoir à réécrire plusieur fois le même code et, surtout, cela permet de répéter le code un nombre de fois pouvant varier d'une exécution à l'autre.

## La boucle `TANT QUE` (while)

La boucle `TANT QUE` est la plus simple à utiliser. Elle répète un ensemble d'instructions *tant que* une certaine condition est `vraie`.

En algorithmie on écrira :

```
ENTIER i = 0
TANT QUE (i < 1000) FAIRE
    i = i + 1
    AFFICHER i
FIN TANT QUE
``` 

Ci-dessus :
- une variable `i` de type *"entier"* est initialisée à **0**, 
- une boucle `TANT QUE` commence qui se répètera tant que cette variable `i` n'a pas atteint la valeur **1000**
- Le code qui va se répéter augmente la valeur de `i` de **1** à chaque étape, et affiche la variable
- enfin, on marque la fin de la boucle avec l'instuction `FIN TANT QUE`

En anglais (et donc en PHP), *'tant que'* se dit *'while'* et la même boucle `TANT QUE` s'écrira comme suit :

```php
$i = 0;
while ($i < 1000) {
    $i = $i + 1;
    echo $i . ' ';
}
```

**Et affichera :**

```
1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 ...
```

Créez un nouveau fichier *'.php'* et expérimentez avec cette boucle `TANT QUE`. 

Vous pouvez changer la condition de la boucle, ou la valeur d'incrément de la variable `i`. Vous pouvez même utiliser des valeurs négatives, les possibilités sont nombreuses.

> **Attention !** Cependant, il est très facile de créez des boucles infinies, c'est à dire qui ne s'arrêtent jamais parce que la condition de la boucle ne devient jamais fausse. Si une telle chose vous arrive, il faudra arrêter vous même votre programme brutalement avec le raccourci `"CTRL + C"`.

**Exemple :**

```php
$i = 0;
while ($i < 1000) {
    $i = $i - 1;
    echo $i . ' ';
}
```

Ci dessus, on a modifié le programme pour décrémenter la variable `i` au lieu de l'incrémenter, mais en laissant la condition de la boucle intacte **( i < 1000 )**. Or, en décrémentant `i` de **1** à chaque tour, sa valeur sera toujours inférieure à 1000, et donc la boucle ne s'arrêtera jamais.

Faites le test, et n'oubliez pas d'arrêter votre programme avec le raccourci `"CTRL + C*`.

Pour compter correctement en négatif, il faut effectivement modifier le code pour décrémenter `i` au lieu de l'incrémenter, mais il faut surtout modifier la condition de la boucle comme suit :

```PHP
$i = 0;
while ($i > -1000) {
    $i = $i - 1;
    echo $i . ' ';
}
```

## La boucle `POUR` (for)

La boucle `POUR` est la boucle idéale à utiliser lorsque l'on souhaite créer un compteur comme nous l'avons fait précédemment avec la boucle `TANT QUE`, mais sa syntaxe est un peu plus délicate car elle réunie plusieurs instructions en une seule ligne.

Re-voyons l'algorithme d'un compteur avec la boucle `TANT QUE` :

```
ENTIER i = 0
TANT QUE (i < 1000) FAIRE
    i = i + 1
    AFFICHER i
FIN TANT QUE
``` 

Ici, la boucle se résume en fait à trois instructions simples :
- initialiser `i` à **0**
- tester si `i` est toujours inférieur à **1000**
- incrémenter `i` de **1**

Soit :
- initialisation
- condition 
- incrément

La boucle `POUR` va nous permettre de résumer ces trois instructions en une seule ligne :

```
POUR i ALLANT DE 0 à 1000 DE 1 EN 1 FAIRE
    AFFICHER i
FIN POUR
```

Soit, sur une seule ligne, l'initialisation, la condition et l'incrément.

En code, on ne va pas pouvoir traduire cette ligne d'algorithme directement, il va falloir utiliser une syntaxe précise.

En anglais, *'pour'* se dit "*for*".

Syntaxe de la boucle `for` en PHP :

```php
for (initialisation ; condition ; incrément) {

}
```
Les `';'` sont importants.

Notre compteur devient donc :
```php
for ($i = 0 ; $i < 1000 ; $i++) {
    echo $i . ' ';
}
```

> **Note :** `i++` est une façon plus courte d'écrire `i = i + 1`.

> **Note bis :** voyez également comme l'instruction d'incrémentation de la boucle `for` se fait en réalité après que tout le code à l'intérieur de la boucle ait été exécuté. Par conséquent, notre boucle ne compte plus de 1 à 1000, mais de 0 à 999. **Trouvez une parade pour corriger cela !**

## La *vraie* boucle `TANT QUE` (while)

Vous avez vu comment créer un compteur avec une boucle `TANT QUE`, mais, juste après, vous avez appris à faire exactement la même chose en plus rapide, avec une boucle `POUR`. Donc, quel intérêt d'utilser la boucle `TANT QUE` ?

En réalité, on n'utilisera rarement celle-ci pour faire un compteur. Dans ce cas on privilégiera, la plupart du temps, la boucle `POUR`. Il existe toutefois de nombreux cas dans lesquels on ne cherche pas à compter quoique ce soit, et ceux-ci peuvent se résumer ainsi : *`"on doit répeter un certain code jusqu'à ce que quelque chose se produise, mais on ne sait pas à l'avance quand cela arrivera."`*

Prenons par exemple un programme dans lequel on poserait une question à l'utilisateur avant de lui réafficher sa réponse tant que celui-ci ne tape pas un certain mot, par exemple *"stop"*.

En algorithmie, ce programme ressemblerait à quelque chose comme :

```
CHAINE reponse = QUESTION "Tapez un texte SVP (stop pour arrêter) :"
AFFICHER reponse
TANT QUE reponse <> "stop" FAIRE
    reponse = QUESTION "Tapez un texte SVP (stop pour arrêter) :"
    AFFICHER reponse
FIN TANT QUE
```

Ci-dessus, le programme va demander une première fois à l'utilisateur de taper un texte, puis afficher sa réponse. Ensuite, si la réponse n'est pas *"stop"*, le programme va entrer dans une boucle qui reposera la question et afficher la réponse, tant que la réponse n'est pas stop.

**En PHP, maintenant :**
```PHP
$reponse = readline('Tapez un texte SVP (stop pour arrêter) : ');
echo 'Vous avez répondu : ' . $reponse . "\n\r";
while ($reponse != 'stop'){
    $reponse = readline('Tapez un texte SVP (stop pour arrêter) : ');
    echo 'Vous avez répondu : ' . $reponse. "\n\r";
}
```

**`Expérimentez !`**

## La boucle `FAIRE ... TANT QUE` (do ... while)

Cette dernière boucle est tout simplement une boucle `TANT QUE` inversée.

Au lieu de tester la condition de continuité, puis d'éxécuter le code de la boucle en suite, la boucle `FAIRE ... TANT QUE` exécute d'abord le code, puis fait le test ensuite.

*A quoi ça sert ?*

Dans l'exemple précédent, vous avez vu qu'il fallait poser la question, une première fois à l'utilisateur et afficher sa réponse avant de rentrer dans la boucle. Avec la boucle `FAIRE ... TANT QUE`, plus besoin.

*L'algorithme devient :*

```
CHAINE reponse
FAIRE
    reponse = QUESTION "Tapez un texte SVP (stop pour arrêter) :"
    AFFICHER reponse
TANT QUE reponse <> "stop" FAIRE
```

C'est beaucoup plus court et plus propre.

```PHP
do {
    $reponse = readline('Tapez un texte SVP (stop pour arrêter) : ');
    echo 'Vous avez répondu : ' . $reponse. "\n\r";
} while ($reponse != 'stop');
```

