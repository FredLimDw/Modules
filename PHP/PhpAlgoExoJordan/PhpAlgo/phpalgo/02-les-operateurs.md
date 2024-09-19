###### Intro à la programmation

# Les Opérateurs arithmétiques

## Opérations mathématiques simples

Les opérateurs mathématiques suivants sont possibles 

- `+` : addition
- `-` : soustraction
- `*` : multiplication 
- `/` : division
- `%` : modulo
- `**` : puissance

Certaines précautions doivent être prises avec certains, tandis que d'autres méritent d'être expliqués.

### L'addition `+`, la sousctraction `-` et la multiplication `*`

Ces opérateurs sont des plus simples, si vous ne savez pas les utiliser, c'est que vous vous être pêut-être trompé d'orientation.

**Exemple :**
```PHP
echo 5 + 5; 
// Affiche 10
```

Les parenthèses peuvent permettent de gérer les priorités.

**Exemple :**
```PHP
echo 5 + (5 * 2); 
// Affiche 15
```

```PHP
echo (5 + 5) * 2; 
// Affiche 20
```

### La division `/`

La division par 0 n'est pas davantage possible en programmation qu'en Mathématiques classiques.

Si vous effectuez l'instruction `resultat = nb / 0` la majorité des langages produiront une erreur, et pas une belle erreur bien propre. Non, non. Plutôt le genre bon gros plantage bien sale, bien dégueu sans même un message d'erreur digne de ce nom. Autrefois, ce genre de bugs pouvait facilement planter un ordinateur.

C'est pourquoi le bon développeur, avant toute tentative de division, pense toujours à vérifier que le *diviseur* n'est pas nul.

Bien sûr, PHP ne gère pas la division par 0.

> *Petite blague :*
>
> JavaScript ne faisant jamais rien comme tout le monde, lui, autorise la division par 0. Et, le plus fort, il trouve un résultat : `Infinity`.
>
> Les mathématiciens du monde entier seront ravis de savoir que, là où eux et leurs confrères échouent depuis approximativement 3000 ans, JavaScript, lui, a trouvée la solution. C'est qu'il est fort ce JavaScript !
>
> Bref, méfiez-vous. Ceci est purement et simplement, une aberration mathématique. Dans vos développements futurs, si vous faites un jour du JavaScript, faites comme-ci JavaScript ne gérait pas la division par 0, et pensez toujours à vérifier le *diviseur*.

![Albert n'est pas content du tout](./assets/img/02/albert-pas-content.jpg)

### Modulo `%`

Avant de parler de *modulo* petit rappel sur les divisions.

Dans une division, vous avez :

- Le ***dividende*** : c'est ce que l'on divise (ex : 10)
- Le ***diviseur*** : c'est ce par quoi on divise (ex: 2)
- Le ***quotient*** : c'est le résultat de la division (ex: 5)
- Le ***reste*** : c'est ce qu'il reste (ex: 0)

À l'école, on a dû vous l'apprendre comme ça :

  ![Exemple d'une division Euclidienne](./assets/img/02/division-euclidienne.png)

Calculer le *modulo*, en fait, c'est juste demander le ***reste***.

**Ainsi :**

- 4 modulo 2 = 0;
- 5 modulo 2 = 1;
- 10 modulo 5 = 0;
- 13 modulo 5 = 3;

**Et en code :**

```PHP
$reste   = 4%2;   
echo $reste;      // reste = 0
$reste   = 5%2;   
echo $reste;      // reste = 1
$reste   = 13%5;  
echo $reste;      // reste = 3
```

***"Ben oui, mais à quoi ça sert ?"*, nous direz-vous.**

Bonne question. Merci de l'avoir posée.

Il vous arrivera, dans vos programmes de vouloir faire une chose particulière tous les n *trucs*, ou tous les n *bidules*, si vous préférez. 

**Par exemple :** mettre en gras un nom sur cinq. Ou bien mettre un fond bleu une ligne sur trois. Ou encore détourner un euro toutes les dix fiches de paye (non, oubliez celui-là).

C'est dans ce genre de cas que le *modulo* sera très utile.

Observons les *modulos* de 3 :

```php
$reste      = 1%3;   // $reste = 1
$reste      = 2%3;   // $reste = 2
$reste      = 3%3;   // $reste = 0
$reste      = 4%3;   // $reste = 1
$reste      = 5%3;   // $reste = 2
$reste      = 6%3;   // $reste = 0
$reste      = 7%3;   // $reste = 1
$reste      = 8%3;   // $reste = 2
$reste      = 9%3;   // $reste = 0
$reste      = 10%3;  // $reste = 1
$reste      = 11%3;  // $reste = 2
$reste      = 12%3;  // $reste = 0
```

On voit bien que lorsque l'on est sur un multiple de 3 (3, 6, 9, 12...) le reste est de 0, sinon, c'est autre chose (ici 1 ou 2).

Donc, lorsque l'on voudra, dans notre code mettre une ligne sur trois en couleur, il suffira de tester si le numéro de la ligne *modulo* 3 est bien égal à 0. Sinon, on ne fera rien.

### Puissance `**`

Celui-ci est assez explicite, il vous permettra d'écrire rapidement des puissances.

En informatique, les puissances les plus utiles, sont les puissances de 2 (liées au code binaire interne de la machine).

**Et oui :**

- 2^1 = 2
- 2^2 = 4
- 2^3 = 8
- 2^4 = 16
- 2^5 = 32
- 2^6 = 64
- 2^7 = 128
- 2^8 = 256
- 2^9 = 512
- 2^10 = 1024 (1Mo, 1Go, 1To, ...)
- 2^11 = 2048 (2Mo, 2Go, 2To, 2K, ...)
- 2^12 = 4048 (4Mo, 4Go, 4To, 4K, ...)
- ...

Ceci explique les capacités des disques-durs, des clés USB, des carte SD, de la mémoire RAM et également le nombre de pixels des téléviseurs, moniteurs...

**Exemple en PHP :**

```PHP
$result      = 2**1   // 2
$result      = 2**2   // 4
$result      = 2**3   // 8
$result      = 2**4   // 16
$result      = 2**5   // 32
```

  ![les puissances c'est puissant](./assets/img/02/la-puissance-du-geek.jpg)

## Un peu de Maths. Youpi !

Si vous avez besoin de fonctions Mathématiques autres, il en existe tout un ensemble préenregistrées en PHP (*note : c'est le cas de tous les langages de programmation dignes de ce nom*).

Voici un lien vers la liste officielle de toutes les fonctions Mathématiques de base de PHP :

[Fonctions Mathématiques PHP](https://www.php.net/manual/fr/ref.math.php)

Et en voici quelques une parmi les plus utiles en programmation :

### floor()

La fonction [floor()](https://www.php.net/manual/fr/function.floor.php)Permet d'arrondir à l'entier inférieur. 

Extrèmement utile en programmation ! Vital même.

**Exemple :**

```PHP
$entier = floor(1.5);       // entier = 1
$entier = floor(175.4835);  // entier = 175
```
### rand()

La fonction [rand()](https://www.php.net/manual/fr/function.rand.php) retourne un *int* (entier) aléatoire entre 0 et un maximum défini par le système (c'est vraiment beaucoup).

On peut aussi l'utiliser en précisant le min et le max (inclus) souhaités.

**Exemples :**

```PHP
$rnd            = rand();               // entre 0.00000 et beaucoup
$rnd            = rand(10, 20);         // entre 10 et 20 inclus
$rnd            = rand(1, 6);           // Comme un dé à 6 faces
```

### round() et ceil()

Moins utilisées en programmation que leur petite soeur [floor()](https://www.php.net/manual/fr/function.floor.php), les fonctions [round()](https://www.php.net/manual/fr/function.round.php) et [ceil()](https://www.php.net/manual/fr/function.ceil.php) permettent également d'arrondir :

- `round()` arrondi à l'entier le plus proche,
- `ceil()` arrondi à l'entier supérieur.

**Exemple :**

```PHP
$a = floor(4.357);  // a = 4

$b = ceil(4.357);   // b = 5

$c = round(4.357);  // c = 4
$d = round(4.733);  // d = 5
```

Et oui, chez les anglo-saxons, *"arrondir à l'entier supérieur"* c'est *"ceiling"* (plafond), et *"arrondir à l'entier inférieur"* c'est *"floor"* (sol)... Il sont bizarres.

![Passer la serpière, c'est faire des Maths](./assets/img/02/math-floor.jpg)

### pi() ou M_PI 

Notre bonne vielle copine la constante *pi*, mais avec treize chiffres après la virgule. À privilégier plutôt que de créer la votre.

**Exemple :**

```PHP
$r           = 10;
$perimetre   = 2*M_PI*r;  // perimetre = 62.831853071796
$aire        = M_PI*r**2; // aire = 314.15926535898
```

### hypot()

LA fonction [hypot()](https://www.php.net/manual/fr/function.hypot.php) permet de calculer l'hypoténuse d'un triangle rectangle. Si, si !

C'est rare d'en avoir besoin, mais le jour où ça vous tombera dessus, vous serez bien content de savoir qu'il y a une fonction toute prète pour ça. Pas besoin de se faire des noeuds au cerveau avec les racines carrées.

*La prof de Maths en 5ème :*

> "L'hypoténuse est égale à la racine carrée de la somme des carrés des deux autres côtés"

... Nia nia nia ...

*... Tiens Madame, c'est plus simple comme ça :*

```php
$a = 3;
$b = 4;
$hyp = hypot(a, b); // $hyp = 5
```

 ![Pythagore en JavaScript](./assets/img/02/pythagore.jpg)

### sqrt()

Si un jour vous devez calculer une racine carré, rien de plus simple :

```javascript
$a = sqrt(100);  // $a = 10
```


## Pratique

Lancez le programme `02-les-operateurs.js` avec la commande `node 01-les-operateurs.js`.

Celui-ci effectue divers opération mathématiques et affiche les résultats.

A noter qu'il est également fait massivement usage de la concaténation des chaînes de caractère avec l'opérateur `+`.

Cela permet de faire de créer des messages beaucoup plus intéressants dans le terminal :

![bla](./assets/img/02/exemple-terminal-02.png)

N'hésitez pas à ouvrir le fichier, à le modifier, à créer le votre.
Amusez-vous, trifouillez, bidouillez, expérimentez, pratiquez.

## En Résumé

- Pour les opérations mathématiques de base, on utilise les opérateurs `+`, `-`, `/` et `*`
    - attention `+` sert aussi à *concaténer* (coller) le texte
    - la division (`/`) par zéro, c'est pas beau
- `%` (modulo), sert à trouver le reste d'une division
- `**` sert à faire des puissance. Exemple : `2**8` donne 256
- La bibliothèque `Math` contient des fonctions Mathématiques dont :
    - `Math.floor()` : pour arrondir un nombre à l'entier inférieur
    - `Math.random()` : pour obtenir un nombre aléatoire (de 0 à 1)
    - `Math.PI` : *pi*
    - `Math.sqrt()` : pour faire trouver la racine carrée d'un nombre