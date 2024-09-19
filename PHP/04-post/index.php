<form method="post"><!-- Il faut préciser la methode pour que le formulaire sache que c'est la méthode post et non get-->
<!-- Ne pas utiliser la méthode get sur les formulaires car ce n'est pas sécurisé-->
    <label>Prenom</label>
    <input type="text" name="prenom">
    <br><br>
    <label>Description</label>
    <textarea name="description"></textarea>
    <br><br>
    <input type="submit" value="Poster"> 
</form>

<?php
//Les indices correspondent aux name qu'on a donné
//Lecture du code ci dessous : Si le formulaire a été posté, j'affiche l'élément prénom qui a été posté
if($_POST) {
    echo '<div id="fond">';
    echo $_POST['prenom'] . '<br>';
    echo $_POST['description'] . '<br>';
    echo'</div>';
}




?>
