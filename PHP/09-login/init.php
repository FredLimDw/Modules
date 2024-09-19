<?php

//Je me connecte à la BDD :
$pdo = new PDO('mysql:host=localhost;dbname=exercice', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
//Je vérifie
//var_dump($pdo);

//J'ouvre la session :
session_start();
//S'il y a l'info action dans l'URL et si l'info action est égal à deconnexion :
if (isset($_GET['action']) && $_GET['action'] == 'deconnexion') {
	session_destroy();
	header('location:index.php');
}

//Je déclare une varaible qui me permettra d'afficher du contenu plus tard comme les messages de succès etc..
$content = '';

?>