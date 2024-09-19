<?php

/*
Créer un fichier Database.php qui contendra la class Database

Cette class va contenir une méthode connexion() qui lancera l'objet PDO

Les informations à fournir à PDO devront être stockées dans des propriétés

Il serait intéressant d'utiliser les exceptions en cas de problème

-------------

Créer une BDD sur PHPmyAdmin
Mise en place de l'autoload

*/
require_once('Dtabase.php');

$database = new Database();
$pdo = $database->connexion();