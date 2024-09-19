<?php
include('init.php');
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
</head>
<body>
    
    <?php
    //Si l'utilisateur est connecté :
    if(isset($_SESSION['membre'])) {
        echo '<h1>Bonjour ' . $_SESSION['membre']['prenom'] . '</h1>';
        echo '<a href="?action=deconnexion">Déconnexion</a>';
    }else{


    ?>

    <a href="inscription.php">Inscription</a>

    -

    <a href="connexion.php">Connexion</a>

   <?php
}
   ?>

</body>
</html>