<!--Créer une système d'ajout de livres dans un répertoire.

1. Créer une BDD bibliothèque
	Table : livre (id_livre, titre, auteur)

2. Créer un formulaire d'ajout de livre

3. On enregistre en base les livres ajoutés

4. On affiche un tableau HTML qui récapitule les livres présent en base -->

<?php
//Je me connecte à la base :
$pdo = new PDO('mysql:host=localhost;dbname=librairie', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
//Je vérifie
//var_dump($pdo);

//Si le formulaire a été validé
if($_POST){
    //Je gère le solucis d'apostrophe :
    $_POST['titre'] = addslashes($_POST['titre']);
    $_POST['auteur'] = addslashes($_POST['auteur']);
    //J'ajoute le livre dans la bdd :
    $pdo->exec("INSERT INTO livre (titre, auteur) VALUES ('$_POST[titre]', '$_POST[auteur]')");
}


?>

<table border="1">
    <tr>
        <th>Titre</th>
        <th>Auteur</th>
    </tr>
    <?php
    //On affiche les éléments présents dans la table grâce à une boucle
    $r = $pdo->query('SELECT * FROM livre');
    while($livre = $r->fetch(PDO::FETCH_ASSOC)){
        echo '<tr>';
            echo'<td>' . $livre['titre'] . '</td>';
            echo'<td>' . $livre['auteur'] . '</td>';
        echo '</tr>';
    }


    ?>
</table>



<form method="post">
    <input type="text" name="titre" placeholder="Titre">;
    <input type="text" name="auteur" placeholder="Auteur">;
    <input type="submit" value="Ajouter">;
</form>

