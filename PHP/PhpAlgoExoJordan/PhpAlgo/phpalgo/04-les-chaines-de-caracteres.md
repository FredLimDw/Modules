###### Intro à la programmation

# Les chaines de caractères

## Introduction

Vous avez déjà vu qu'il existait plusieurs types de variables et que parmi ceux-ci on trouvait le type *string* pour les chaines de caractères. Ce que vous n'avez pas encore vu c'est qu'il est possible de manipuler ces chaines de nombreuses façons. On peut les fusionner, les découper, y insérer d'autres chaînes, faire des recherches... Dans ce chapitre vous apprendrez quelques uns des outils les plus utiles pour manipuler les chaînes.

## Fonctions de chaînes de caractères

### strlen
[strlen](https://www.php.net/manual/en/function.strlen.php) est une fonction qui vous permet de connaître la longueur d'une chaîne de caractère.

**Exemple :**

```PHP
    $text = "HELLO WORLD";
    echo 'Le texte "' . $text . '" a une longueur de ' . strlen($text) . ' caractères';
```

Notez que tous les caractères sont comptabilisés, y compris les espaces.

**Affichera :**

```
Le texte "HELLO WORLD" a une longueur de 11 caractères
```

### trim()

La fonction [trim()](https://www.php.net/manual/fr/function.trim.php) permet de retirer tous les espaces autour d'une chaîne de caractères. On l'utilise pour nettoyer la chaine de possibles espaces inutiles.

**Exemple :**

```PHP
    $text = "   HELLO WORLD   ";
    echo 'Le texte "' . $text . '" devient "' . trim($text) . '"';
```

**Affichera :**

```
Le texte "   HELLO WORLD   " devient "HELLO WORLD"
```

### strpos()

La fonction [strpos()](https://www.php.net/manual/fr/function.strpos.php) est l'une des plus importantes à connaître puisqu'elle permet de trouver la position d'une chaîne (ou d'un caractère) à l'intérieur d'une autre chaîne plus longue.

Attention, comme pour les tableaux, l'index commence à partir de zéro.

**Exemple :**

```php
    $alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $posE = strpos($alphabet, 'E') + 1;  
    $posT = strpos($alphabet,'T') + 1;
    echo 'E est la ' . $posE . 'ème lettre de l\'alphabet';
    echo 'et T est la ' . $posT . 'ème.';
```

**Affichera :**

```
E est la 5ème lettre de l'alphabet
et T est la 20ème.
```

Il est également possible de commencer la recherche à partir d'une position donnée.
Prenons la chaine suivante, par exemple :

```OOOOXOOOOXOOXOO``` 

Il y'a trois 'X' dans la chaine de caractère. Le premier à l'index 4, le suivant à l'index 9 et le dernier à l'index 12.

**Le code suivant :**

```php
    $chaine = 'OOOOXOOOOXOOXOO';
    $posX = strpos($chaine, 'X');
    echo 'Position de X : ' . $posX;
```

**Affichera :**

```
Position de X : 4
```

Mais on peut aussi écrire : 

```php
    $chaine = 'OOOOXOOOOXOOXOO';
    $posX = strpos($chaine, 'X', 5);
    echo 'Prochain X à partir de 5 : ' . $posX;
    $posX = strpos($chaine, 'X', 11);
    echo 'Prochain X  à partir de 11 : ' . $posX;
```

**Affichera :**

```
Prochain X à partir de 5 : 9
Prochain X  à partir de 11 : 12
```

### strrpos()

La fonction [strrpos()](https://www.php.net/manual/fr/function.strrpos.php) fonctionne exactement de la même façon que [strpos()](https://www.php.net/manual/fr/function.strpos.php), mais, à l'envers, c'est à dire en commençant par la fin de la chaîne de caractères. Très pratique pour trouver la dernière occurence d'une chaîne dans une autre.

**Exemple :**

```php
    $text = 'HELLO WORLD';
    $lastPosO = strrpos($text, 'O');
    echo 'Index du dernier "O" : ' . $lastPosO;
```

**Affichera :**

```
Index du dernier "O" : 7
```

### substr()

La fonction [substr()](https://www.php.net/manual/fr/function.substr.php) permet d'aller chercher un morceau de chaîne de caractère en précisant sa position et sa longueur.

**Exemple :**

```php
    $text = 'HELLO WORLD !';
    $text2 = substr($text, 6, 5);
    echo $text2;
```

**Affichera :**

```
WORLD
```

On peut omettre le dernier argument, dans ce cas, la fonction [substr()](https://www.php.net/manual/fr/function.substr.php) prendra tous les caractères jusqu'au dernier.

**Exemple :**

```javascript
    $text = 'HELLO WORLD !';
    $text2 = substr($text, 6);
    echo $text2;
```

**Affichera :**

```
WORLD !
```

### str_replace()

La fonction [str_replace()](https://www.php.net/manual/fr/function.str-replace.php) permet de remplacer une chaîne dans une autre.

**Exemple :**

```php
$text = 'HELLO WORMS !';
$text2 = str_replace('WORMS', 'WORLD', $text);
echo $text;
echo $text2;
```

**Affichera :**
```
HELLO WORMS !
HELLO WORLD !
```

> Note : [str_replace()](https://www.php.net/manual/fr/function.str-replace.php) remplace toutes les occurences de la chaîne recherchée et pas uniquement la première.

**Exemple :**

```php
$text = 'Je préfère les chiens car les chiens font les meilleurs compagnons.';
$text2 = str_replace('chiens', 'chats', $text);
echo $text;
echo $text2;
```

**Affichera :**
```
Je préfère les chiens car les chiens font les meilleurs compagnons.
Je préfère les chats car les chats font les meilleurs compagnons.
```

**Note :**

> Il est possible d'utiliser d'autres fonctiond de recherche et remplacement qui utilisent ce que l'on appelle des *expressions régulière*. C'est une façon un peu particulière de *"codifier"* la structure d'une chaîne de caractère pour effectuer des choses complexes en un minimum de lignes de codes. Mais c'est un concept bien trop complexe à manipuler à votre niveau. Vous aurez des cours dédiés en temps et en heure sur le sujet. En attendant, essayez déjà d'utiliser les méthodes de manipulation de chaînes avec des chaînes de caractères simples, il vous faut maîtriser cela avant de passer à plus difficile.

### Lire un caractère précis

En PHP, les chaînes de caractères se comportent presque comme des tableaux. Il devient donc possible de lire les caractères d'une chaine en utilisant les `[]` comme pour un tableau.

**Exemple :**

```php
$alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$lettre5 = $alphabet[4];
$lettre16 = $alphabet[15];
echo 'La 5ème lettre de l\'alphabet est le ' . $lettre5;
echo 'La 16ème est le ' . $lettre16;
```

**Affichera :**
```
La 5ème lettre de l'alphabet est le E
La 16ème est le P
```

### Changer la casse

Pour changer la casse (mettre le texte en majuscules ou minuscule), il existe plusieurs possibilités.

#### strtoupper()

La fonction [strtoupper()](https://www.php.net/manual/fr/function.strtoupper.php) permet de passer tous les caractères d'une chaîne en majuscules.

**Exemple :**

```php
$text = "Hello World !";
echo strtoupper($text);
```

**Affichera :**
```
HELLO WORLD !
```

#### strtolower()

La fonction [strtolower()](https://www.php.net/manual/fr/function.strtolower.php) permet de passer tous les caractères d'une chaîne en minuscules.

**Exemple :**

```php
$text = "HELLO WORLD !";
echo strtolower($text);
```

**Affichera :**
```
hello world !
```

#### ucfirst()

La fonction [ucfirst()](https://www.php.net/manual/fr/function.ucfirst.php) permet de passer uniquement le premier caractère en majuscule.

**Exemple :**

```php
$text = "hello world !";
echo ucfirst($text);
```

**Affichera :**
```
Hello world !
```

#### ucwords()

La fonction [ucwords()](https://www.php.net/manual/fr/function.ucwords.php) permet de passer uniquement le premier caractère de chaque mot en majuscule.

**Exemple :**

```php
$text = "hello world !";
echo ucwords($text);
```

**Affichera :**
```
Hello World !
```