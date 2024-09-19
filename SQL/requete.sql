--COURS MYSQL

-- Dans le terminal, nous sommes situés à la racine des bases de données
-- Les éléments dans un tableau () sont séparés par une virgule, autrement dit après le dernier élément d'un tableau il n'y a pas de virgule.
-- Toutes les lignes de commandes se terminent obligatoirement par un point virgule
-- Les chaînes de caractères s'écrivent toujours entre quotes (simple '' ou double "")

SHOW DATABASES;
--Afficher toutes les bases de données

CREATE DATABASE vitrine;
--Créer une base de données

USE vitrine;
-- Accéder à la BDD vitrine

CREATE TABLE user(
    email VARCHAR(255) NOT NULL,
    nom VARCHAR(255) NOT NULL
)
--Créer une table 

DESC user;
--Description (détails) de la table user

--------------------------------------------------------------

ALTER TABLE user --Ca veut tu vas apporter un changement dans la table user
--CHANGEMENT (ALTER)
ALTER TABLE user ADD prenom VARCHAR(255) NOT NULL;
ALTER TABLE user DROP email; --Pour supprimer
ALTER TABLE user CHANGE nom age INT NOT NULL; --changer le nom du champs
ALTER TABLE user MODIFY prenom INT NOT NULL; -- changer le type du champs


--Vider  
TRUNCATE user;


--DROP (SUPPRIMER)
DROP TABLE user;
DROP DATABASE vitrine;

-----------------------------------------------------------------

-- REQUETES
-- 4 REQUETES
-- SELECT
-- INSERT INTO
-- UPDATE
-- DELETE

--La requête SELECT

--SELECT **nom(s) des champs qu'on souhaite récupérer** FROM ** nom de la table
--

--Afficher le prenom de tous les employes

--SELECT 
-- La requête SELECT permet de récupérer un jeu de résultats (c'est comme si on posait une question et qu'il va nous retourner une réponse)

-- les requêtes SELECT commencent toujours par SELECT
--Après SELECT, on définit ce qu'on veut récupérer (des champs, tables; fonctions etc...)
-- Dans toutes les requêtes, on doit définir dans quelle table avec le terme FROM

-- Afficher les prénoms des employés :
SELECT prenom FROM employes;

-- Afficher les prénoms et les salaires des employés :
SELECT prenom, salaire FROM employes; --y'a pas de virgule apres salaire car y'a pas d'autre champs derrière. La virgule est un séparateur donc il faut deux éléments de part et d'autres

--Afficher toutes les infos des employés :
Select * FROM employes -- le signe * veut dire ALL donc tout

-- WHERE c'est la précision. Cela se traduit plutot par "lorsque"
--Afficher le prénom et le nom des employées(lorsque c'est des femmes)
SELECT prenom, nom FROM employes WHERE sexe = 'f'; -- comme f c'est un VARCHAR on met toujours entre guillemet. Pas besoin pour les integers et floats.

-- Comment s'appelle (nom/prenom) l'employé numero 802(id)
SELECT nom, prenom FROM employes WHERE id_employes = 802; -- Pas besoin de entre quote '' à 802 car c'est pas un VARCHAR mais un INTEGER

-- Afficher le nom des services
-- On utilisera donc DISTINCT pour retirer les doublons. Admettons que sur les 10 personnes : 5 travaillent à l'informatique, 3 au juridique et 2 en paie. Cela n'affichera donc que informatique, juridque et paie. et non 5 fois informatiques, 3 fois juridique et 2 fois paie. 
SELECT DISTINCT service FROM employes;

----------------------------------------------------
--BETWEEN
-- Afficher les employés ayant un salaire entre 1800 et 2300
SELECT * FROM employes WHERE salaire BETWEEN 1800 AND 2300;

-- Afficher les employés ayant un salaire entre 1800 et 2300 et qui ont une date d'embauche entre 2010-12-09 et 2012-09-10
SELECT * FROM employes WHERE salaire BETWEEN 1800 AND 2300 AND date_embauche BETWEEN 2010-12-09 AND 2012-09-10;

-----------------------------------------------
--LIKE

--Afficher les prénoms qui commencent par la lettre A
SELECT prenom FROM employes WHERE prenom LIKE 'a%'; 
--% définit la postion du reste de la chaine de caractères par rapport au(x) caractère(s) recherché(s)

--Afficher les prénoms qui commencent par les lettres DA
SELECT prenom FROM employes WHERE prenom LIKE 'da%'; 

--Afficher les prénoms qui se terminent par la lettre E
SELECT prenom from employes WHERE prenom LIKE '%e';

--Afficher les prénoms qui contiennent la lettre M
SELECT prenom from employes WHERE prenom LIKE '%m%'; 
-- Cette requête est utilisée par les barres de recherche 

--Afficher les prénoms qui ne contiennent pas la lettre M
SELECT prenom from employes WHERE prenom NOT LIKE '%m%'; 

-- Afficher les prénoms qui commencent et se terminent par un E
SELECT prenom FROM employes WHERE prenom LIKE 'l%a';

-----------------------------------------------------
-- Les opérateurs 

-- =            Affection, égale à (1 valeur)
-- !=           Différent de (1 valeur)
-- ou
-- <>           Différent de (1 valeur)

-- IN()         Affection, égal à (1 ou plusieurs valeurs)
-- NOT IN()     Différent de (1 ou plusieurs valeurs)

-- >            Strictement supérieur à
-- >=           Supérieur ou égal à
-- <            Strictement inférieur à 
-- <=           Inférieur ou égal à

-- AND          Et
-- OR           Ou
--Afficher les commerciaux gagnant un salaire inférieur ou égale à 2000€
SELECT * FROM employes WHERE service = 'commercial' AND salaire <= 2000;

--Afficher les commerciaux et les employés gagnant un salaire inférieur ou égale à 2000€
SELECT * FROM employes WHERE service = 'commercial' OR salaire <= 2000;

--Afficher les commerciaux 
SELECT * FROM employes WHERE service = 'commercial';

--Afficher les employés qui ne sont pas du service commercial
SELECT * FROM employes != 'commercial';

--Afficher les commerciaux et les informaticiens
SELECT * FROM employes WHERE service IN('commercial', 'informatique'); -- Quand un champs à plusieurs affectation possible on utiliserait IN à contrario du =

-- Afficher les employés qui ne sont pas des commerciaux ou des informaticiens
SELECT * FROM employes WHERE service NOT IN('commercial', 'informatique');

--------------------------------------------------------
--ORDONANCE : 
--ORDER BY + nom du champ + sens (ASC-endant et DESC-endant)

-- Afficher les prénoms des employés par ordre alphabétique
SELECT prenom FROM employes ORDER BY prenom ASC;
SELECT prenom FROM employes ORDER BY prenom;
--Si on utilise ORDER BY c'est que 'lon souhaite trier dans un sens ou dans l'autre 
--Par défaut si on ne définit pas le sens, la valeur est ASC, autrement dit on n'est pas obligé de mettre ASC

-- Afficher les nom des employés par ordre anti-alphabetique
SELECT nom FROM employes ORDER BY nom DESC;

-- Afficher les employés par ordre alphabétique des services
SELECT* FROM employes ORDER BY service;

-- Afficher les employés par ordre alphabétique des services et par ordre alphabétique des noms
SELECT* FROM employes ORDER BY service, nom;

------------------------------------------------
--LIMITATION : 
--LIMIT + position, quantité (intégers)

--('fraise', 'pomme', 'kiwi', 'banane')
--      0       1       2       3
--Dans un tableau, la première position est toujours 0 et entier

-- Afficher l'employé qui gagne le moins
SELECT * FROM employes ORDER BY salaire LIMIT 0,1;
SELECT * FROM employes ORDER BY salaire LIMIT 1;
-- Si on ne met pas de position, la valeuir par défaut est 0

-- Afficher les trois premiers qui gagne le moins
SELECT * FROM employes ORDER BY salaire LIMIT 0,3;

-- Afficher de Guillaume à Benoit (par rapoort au code ci-dessus)
SELECT * FROM employes ORDER BY salaire LIMIT 6,6;


-- Afficher les 5 employés qui gagnent le plus
SELECT * FROM employes ORDER BY salaire DESC LIMIT 0,5;

--Afficher les 2 commerciaux qui gagnent le moins
SELECT * FROM employes WHERE service = 'commercial' ORDER BY salaire LIMIT 0,2;

-- REGROUPEMENT
--GROUP BY 
--Afficher le nombre d'employés par service 
SELECT service, COUNT (*) FROM employes  GROUP BY service;

--------------------------------------------------------------------------------
--1-- Afficher la profession de l'employé 547
SELECT service FROM employes WHERE id_employes = 547;

--2-- Afficher la date d'embauche d'Amandine
SELECT date_embauche FROM employes WHERE prenom = 'amandine';

--3-- afficher le nom de famille de Guillaume
SELECT nom FROM employes WHERE prenom = 'guillaume';

--7-- Afficher les 5 premiers employés apres avoir classé leur nom d efamille par ordre alphabétique
SELECT * FROM employes ORDER BY nom LIMIT 5;

--13--Afficher tous les employés (sauf ceux du service production et secrétariat)
SELECT * FROM employes WHERE services NOT IN('prodction', 'secretariat');

--15-- Afficher les commerciaux ayant été recruté avant 2012 de sexe masculin et gagnant un salaire supérieur à 2500€
SELECT * FROM employés WHERE service = 'commercial' AND date_embauche < '2012-01-01' AND sexe = 'm' and salaire > 2500;

--16--Qui a été embauché en dernier ?
SELECT * FROM employes ORDER BY date_embauche DESC LIMIT 1; 

--17--Afficher les informations sur l'employé du service commercikal gagnant le salaire le plus élevé
SELECT * FROM employes WHERE service = 'commercial'  ORDER BY salaire DESC LIMIT 1;

--18--Afficher le prenom du comptable gagnant le meilleur salaire
SELECT prenom FROM employes WHERE service = 'comptabilite' ORDER BY salaire DESC LIMIT 1;

--19--afficher le prénom de l'informaticien ayant été recruté en premier
SELECT prenom FROM employes WHERE service = 'informatique' ORDER BY date_embauche LIMIT 1;

-----------------------------------------------------------

--Une fonction est une capsule. C'est une boite qu'on appelle quand on a besoin

--Compréhension des fonctions :
--------------------------
-- Creation de la fonction
function multiplication (number1, number2){
    number1 * number2;
}
--appel de la fonction

-- En SQL, il existe des fonctions prédéfinies, 

-- Afficher le prénom et le salaire annuel des employés
SELECT prenom, salaire*12 AS 'salaire annuel' FROM employes;
--Il est possible de faire subir des opértiona mathém   riques à des champs, mais biensu^r s'il s'agit de type nombre
-- On peut renommer les champs si besoin avec des alias qui s'écrit 'AS'

-- Afficher la masse salariale de l'entreprise
--SUM() permet d'additionner
SELECT SUM(salaire*12) AS 'Masse salariale' FROM employes;

--Afficher le salaire moyen des employés
--AVG() permet de calculer une moyenne

SELECT AVG(salaire) AS 'Salaire moyen' FROM employés;

-- ROUND() permet d'arrondir
-- il y a deux argument :
-- 1er argument : nombre à arrondir (Qu'est ce que je veux arrondire ?)
-- 2eme argument : nombre de décimal (integer) (arrondir a cmb de chiffre apres la virugle)

SELECT ROUND(AVG(salaire),1) FROM employes;

--Afficher le nombre de femme dans l'entreprise 
-- COUNT (permet de compter)
-- l'argument peut etre n'importe quel champs et voir tous les champs (*) car il y a autant de de prenoms, que de noms, que de sexes, que de dates, que de services etc...
SELECT COUNT(*) FROM employés WHERE sexe = 'f'

--MIN() permet de retourner la plus petite valeur du champs
--Afficher le plus bas salaire
SELECT MIN(salaire) FROM employes;

--Afficher les informations de l'employés qui gafgne le plus
SELECT * FROM employes WHERE salaire = 5000; -- requete en dure

--Lorsqu'on ne connait pas le montnat du salaire le plus élevé
SELECT * FROM employes wHERE salaire = (SELECT MAX(salaire) FROM employes); -- C'est une imbrication de requete dans une requête, c'est donc dynamique

----------------------------------------------------------------
----------------------------------------------------------------

--Requête INSERT INTO (Ajouter)
--INSERT INTO + nom de la table + (tableau des champs) + VALUES + (tableau des valeurs) 
INSERT INTO employes(prenom, sexe, salaire, date_embauche, nom, service) VALUES ('bart', 'm', 6000, CURDATE(), 'lord', 'informatique');
--CURDATE = la date du jour donc il permet de retourner la date du jour (Syntaxe : YYYY-mm-dd)
--Il y a autnat de champs que de valeurs dans les tableaux
--Les positions doivent matcher, (l'ordre des valeurs doit correspondre à l'odre des champs)
--Les champs ne s'écrivent pas entre quote, seul les valeurs de type string (chaine de caratère)
-- Si un champ n'a pas de valeur il faut définir NULL


-- On peut bien sûr faire des insertion multiples

--------------------------------------------------
--------------------------------------------------
-- Requête UPDATE


-- REQUETE UPDATE + table + SET + champs = valeur
UPDATE employes SET salaire = 10; -- Ca changera tous les salaires à 10€ donc toujours preciser si c'est pas le 

-- Apres le terme SET on met toujours ce qu'on veut modifier
UPDATE employes SET salaire = 1000, prenom = 'ugo' WHERE id_employes = 992; -- Il n'y a qu'un seul id donc forcément seul Ugo changera
UPDATE employes SET salaire = 1 WHERE service = 'commercial';

-- Attention, pensez à précisier sinon toutes les lignes subissent le changement 

----------------------------------------------------
----------------------------------------------------
----------------------------------------------------
--REQUETE DELETE

DELETE FROM employes WHERE service = 'commercial';
DELETE FROM employes WHERE id_employes = 990;
DELETE FROM employes; -- SUPPRIMER TOUTES LES DONNEES DE LA TABLE

--------------------------------------------------------------------
--------------------------------------------------------------------
--------------------------------------------------------------------

-- 4 -- Afficher le nombre de personnes ayant un id_employe commençant par le chiffre 5 (c'est afficher le nombre donc c'est COUNT)
SELECT COUNT(*) FROM employes WHERE id_employes like "5%";
-- 5 -- Afficher le nombre de commerciaux
SELECT COUNT(*) FROM employes WHERE service = 'commercial';
-- 6 -- Afficher le salaire moyen des informaticiens;
SELECT AVG (salaire) FROM employes WHERE service = 'informatique';
-- 8 -- Afficher le coût de tous les employés du service commercial sur une année (C'est une addition)
SELECT SUM(salaire*12) FROM employes WHERE service ='commercial';
-- 9 -- Afficher le salaire moyen par service (c'est par service donc faut regrouper)
SELECT service, AGV(salaire) FROM employes GROUP BY service;
-- 10 -- Afficher le nombre de recrutement sur l'année 2010
SELECT COUNT(*) from employes WHERE date_embauche BETWEEN '2010-01-01' AND '2010-11-31;=';
SELECT COUNT(*) from employes WHERE date_embauche LIKE '2010%';
-- 11 -- Afficher le salaire moyen appliqué lors des recrutements sur la période allant de 2011 à 2014 (inclus)
SELECT AVG(salaire) FROM employes WHERE date_embauche BETWEEN '2011-01-01' AND '2014-12-31';
-- 12 -- Afficher le nombre de service différent
SELECT COUNT(DISTINCT service) from employes
-- 14 -- Afficher conjointement le nombre d'homme et de femme dans l'entreprise
SELECT sexe, COUNT(*) FROM employes GROUP BY sexe;
--ou--
SELECT SUM(sexe='m') AS 'nb d hommes', SUM(sexe = 'f') AS 'nb de femmes' from employes;
-- 20 -- Augmenter chaque employé de 100€ 
UPDATE employes SET salaire = salaire + 100;
-- 21 -- supprimer les employés du service secrétariat
DELETE FROM employes WHERE service = 'secretariat';

-----------------------------------------------------------------------------
-- VOIR LES JOINTURES