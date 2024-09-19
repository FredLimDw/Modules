<?php

require_once('Dossier1/Hello.php');
require_once('Dossier2/Hello.php');

use Dossier1\Hello as HelloDossier1;
use Dossier2\Hello;

/*
1ère méthode

require_once('Dossier1/Hello.php');
require_once('Dossier2/Hello.php');


$hello1 = new Dossier1\Hello();
$hello2 = new Dossier2\Hello(); 
*/

$hello1 = new HelloDossier1();
$hello2 = new Hello();

/*
extension PHP Namespace Resolver qui permet d'importer les class, (clic droit import)

Un namespace est un mécaniseme qui permet d'organiser et de regrouper des class

Le namespace se place au dessus de la class, et contient l'arborescence (chemin) depuis la racine du projet

Grâce aux namespace, on peut distinguer nos class, si jamais plusieurs portaient le même nom

En cas d'importation de pluiseurs class du même nom pour éviter tout conflit, on peut les renommer en utilisant le mot clé 'as' à la suite de l'importation
*/ 