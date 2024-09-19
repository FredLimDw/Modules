<?php
include('init.php');

//Si l'utilisateur est déjà connecté :
if(isset($_SESSION['membre'])){
    //Je redirige l'utilisateur sur l'index :
    header('location:index.php');
}

//Si le formulaire a été posté : 
    if($_POST) {
        //Je vérifie que je récupère bien les infos :
        //print_r($_POST);

        //Je définie une variable pour stocker les messages d'erreur :
        $erreur = '';

        //Si le prénom est trop court (ici 3 trop court et 21 trop long)
        if(strlen($_POST['prenom']) < 3 || strlen ($_POST['prenom']) > 20 ) {
            $erreur .='<p>Votre prénom est trop court ou trop long.</p>'; //Le point égal .= c'est pour ajouter, on a déterminé le $erreur avec le message vide, cela va donc ajouter ce texte en message d'erreur.
        }
        //Je vérifie si l'email n'existe pas déjà dans ma base
        $r = $pdo->query("SELECT * FROM membre WHERE email = '$_POST[email]'");
        //S'il y un ou plusieur résultats :
        if($r->rowCount() >= 1) { //le rowCount va compter dans la colonne des données stockées dans $r ici le selection de la colonne email.
            $erreur .= '<p> Votre adresse mail est déjà utilisée.</p>';
        }
        //Pour chaque champs, je gère les soucis d'apostrophe :
        foreach($_POST as $indice => $valeur) {
            $_POST[$indice] = addslashes($valeur); // je récupère le champs des indices (qui sont les name du formulaire) puis j'applique le addslashes à sa valeur. ici les (indice)name du formulaire sont nom, prénom, email et mdp.
            // contrairement au for et while qui sont plus utilisé pour l'affichage alors que le foreach c'est pour parcourir un array et le modifier
        } 
        //Je hache le mdp :
        $_POST['mdp'] = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

        //Si la variable $erreur est vide
        if(empty($erreur)) {
            //Je fais ma requête d'insertion :
            $pdo->exec("INSERT INTO membre (nom, prenom, email, mdp) VALUES ('$_POST[nom]', '$_POST[prenom]', '$_POST[email]', '$_POST[mdp]')");
            //J'ajoute un message de succès :
            $content .= '<p>Inscription validée !</p>'; // si on veut le styliser en css, on fait une class <p class>
        }
        $content .= $erreur;
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>

    <?php echo $content; ?>
    <form method="post">
        <input type="text" name="nom" placeholder="Nom">
        <br><br>
        <input type="text" name="prenom" placeholder="Prénom">
        <br><br>
        <input type="email" name="email" placeholder="Adresse mail" required>
        <br><br>
        <input type="password" name="mdp" placeholder="Mot de passe" required>
        <br><br>
        <input type="submit" value="S'inscrire">

    </form>

</body>
</html>