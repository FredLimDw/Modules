<!--- Realiser un systeme de commentaire : 

1. Création de la base de données 
    Création de la table (id_commentaire, pseudo, message, date_heure_messsage)

2. Connexion à la BDD 

3. Création du formulaire permettant de laisser son pseuso et son message. A faire dans la partie HTML

4. Récupération des informations et enregistrement dans la base de données

5. Affichage des messages sur la page

-->

<?php

$pdo = new PDO('mysql:host=localhost;dbname=dialogue', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
//Je vérifie
//var_dump($pdo);

//Si le formatulaire a été poste
if($_POST) {
	// echo 'test';

    // je gère le soucis d'apostrophe :
    $_POST['message'] = addslashes($_POST['message']);
    $_POST['pseudo'] = addslashes($_POST['pseudo']);


	$pdo->exec("INSERT INTO commentaire (pseudo, message, date_heure_message) VALUES ('$_POST[pseudo]', '$_POST[message]', NOW())");
}

//On affiche les messages à la base :
$r = $pdo->query('SELECT * FROM commentaire');
while($commentaire = $r->fetch(PDO::FETCH_ASSOC)) {
    echo $commentaire['pseudo'] . ' : ' . $commentaire['message'] . '<br>'; 
}


?>

<form method="post">
    <input type="text" name="pseudo" placeholder ="Pseudo">
    <textarea name="message" placeholder="Commentaire"></textarea>
    <input type="submit" value="Poster">;

</form>
