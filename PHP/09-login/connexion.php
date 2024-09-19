<?php
include('init.php');

//Si l'utilisateur est déjà connecté :
if(isset($_SESSION['membre'])){
    //Je redirige l'utilisateur sur l'index :
    header('location:index.php');
}

//Si le formulaire a été posté :
if($_POST) {
    //Je récupère les infos correspondant à l'adresse mail dans la bdd :
    $r = $pdo->query("SELECT * FROM membre WHERE email = '$_POST[email]'");
    //Si j'ai un résultat ou plus c'est que le compte existe :
    if($r->rowCount() >= 1){
        $content .= '<p> Connexion ok</p>';
        //Je met sous forme d'array les infos du membre :
        $membre = $r->fetch(PDO::FETCH_ASSOC);
        //Si le mdp est correct:
        if(password_verify($_POST['mdp'],$membre['mdp'])) { // le premier mdp c'est dans le name de form et le deuxieme c'est le mdp de la colonne bdd
            //ICI le mdp est correct :
            $content .='<p>mdp ok</p>';
            //On enregistre les infos de l'utilisateur dans la session :
            $_SESSION['membre']['nom'] =$membre['nom'];
            $_SESSION['membre']['prenom'] =$membre['prenom'];
            $_SESSION['membre']['email'] =$membre['email'];
            // Puis on redirige l'utilisateur sur l'acceuil :
            header('location:index.php');
        } else{
            //ICI le mdp est incorrect :
            $content .= '<p>Le mot de passe est incorrect.</p>';
        }
    }else {
        // Ici le compte n'existe pas car l'adresse mail n'est pas trouvée
        $content .= '<p> Adresse mail inexistante.</p>';
    }

}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>

<?php echo $content; ?>

    <form method="post">
        <input type="email" name="email" placeholder="Adresse mail">
        <input type="password" name="mdp" placeholder="Mot de passe">
        <input type="submit" value="Se connecter">

    </form>
    
</body>
</html>