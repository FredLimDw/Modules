<!--Créer une système d'ajout de livres dans un répertoire.

1. Créer une BDD bibliothèque
	Table : livre (id_livre, titre, auteur)

2. Créer un formulaire d'ajout de livre

3. On enregistre en base les livres ajoutés

4. On affiche un tableau HTML qui récapitule les livres présent en base -->

<?php

$pdo = new PDO('mysql:host=localhost;dbname=repertoire', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
//var_dump($pdo);

if($_POST) {
	// echo 'test';

    // je gère le soucis d'apostrophe :
    $_POST['titre'] = addslashes($_POST['titre']);
    $_POST['nom_auteur'] = addslashes($_POST['nom_auteur']);
    $_POST['prenom_auteur'] = addslashes($_POST['prenom_auteur']);
    $_POST['genre_livre'] = addslashes($_POST['genre_livre']);
    $_POST['resume_livre'] = addslashes($_POST['resume_livre']);


	$pdo->exec("INSERT INTO bibliotheque (titre, nom_auteur, prenom_auteur, genre_livre, resume_livre, annee_publication  ) VALUES ('$_POST[titre]', '$_POST[nom_auteur]', '$_POST[prenom_auteur]', '$_POST[genre_livre]', '$_POST[resume_livre]', '$_POST[annee_publication]')");
}

$r = $pdo->query('SELECT * FROM bibliotheque');
    echo '<table border="1">';
    echo '<tr><th>Titre du livre</th><th>Nom de l\'auteur</th><th>Prénom de l\'auteur</th><th>Genre du livre</th><th>Résumé du livre</th><th>Année de la publication</th></tr>';
    
while($bibliotheque = $r->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>';
            echo '<td>' . $bibliotheque['titre'] . '</td>';
            echo '<td>' . $bibliotheque['nom_auteur'] . '</td>';
            echo '<td>' . $bibliotheque['prenom_auteur'] . '</td>';
            echo '<td>' . $bibliotheque['genre_livre'] . '</td>';
            echo '<td>' . $bibliotheque['resume_livre'] . '</td>';
            echo '<td>' . $bibliotheque['annee_publication'] . '</td>'; 
        echo '</tr>';
}


   

?>


<form method="post"><!-- Il faut préciser la methode pour que le formulaire sache que c'est la méthode post et non get-->
<!-- Ne pas utiliser la méthode get sur les formulaires car ce n'est pas sécurisé-->
    <label>Titre</label>
    <input type="text" name="titre" placeholder="Titre">
    <br><br>
    <label>Nom de l'auteur</label>
    <input type="text" name="nom_auteur" placeholder="Nom">
    <br><br>
    <label>Prenom de l'auteur</label>
    <input type="text" name="prenom_auteur" placeholder="Prenom">
    <br><br>
    <label>Genre du livre</label>
    <input type="text" name="genre_livre" placeholder="Genre">
    <br><br>
    <label>Resume</label>
    <textarea name="resume_livre" placeholder="Résumé"></textarea>
    <br><br>
    <label>Date de la publication</label>
    <input type="number" name="annee_publication" placeholder="Année">
    <br><br>
    <input type="submit" value="ajouter"> 
</form>