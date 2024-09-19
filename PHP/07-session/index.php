<?php
//J'ouvre une session :
session_start();


//J'enregistre des infos dans ma session :
//Il faut l'appeler avec une include sur toutes les pages de notre site 
$_SESSION['prenom'] = 'Amin';
$_SESSION['nom'] = 'HUSSEIN';

//Je supprime une info de ma session
unset($_SESSION['nom']);

//Supprimer une session (comme lorsque l'utilisateur se deconnecte):
session_destroy();

?>