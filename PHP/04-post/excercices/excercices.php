<!-- Créer un formulaire prenant en compte les champs : 
    -Nom
    -Prenom
    -Adresse mail
    -Mot de passe 
    
    Quand on valide le formulaire, il y une liste HTML qui apparait pour récapituler les champs renseignés.
    
    Un fois validé le formulaire disparait-->

 <?php
//Les indices correspondent aux name qu'on a donné
//Lecture du code ci dessous : Si le formulaire a été validé, j'affiche une liste html des elements
if($_POST) {
    echo '<p>Votre inscription est validée. Voici le récapitulatif de vos informations :</p>';
    echo 'ul';
        echo '<li>' . $_POST['nom'] . '</li>';
        echo '<li>' . $_POST['prenom'] . '</li>';
        echo '<li>' . $_POST['mail'] . '</li>';
        echo '<li>' . password_hash($_POST['password'], PASSWORD_DEFAULT) . '</li>';
    echo'</ul>';
} else {
// Pour faire disparaitre le formulaire, comme il ne peut afficher que soit le formulaire ou le résultat on peut mettre une condition avec else et on ouvre l'accolade pour enveloppé le formulaire dessous et refermer l'accolade dans du php toujours.

?>

    <form method="post"><!-- Il faut préciser la methode pour que le formulaire sache que c'est la méthode post et non get-->
<!-- Ne pas utiliser la méthode get sur les formulaires car ce n'est pas sécurisé-->
    <label>Nom</label>
    <input type="text" name="nom" placeholder="Nom">
    <br><br>
    <label>Prenom</label>
    <input type="text" name="prenom" placeholder="Prénom">
    <br><br>
    <label>Adresse mail</label>
    <input type="email" name="mail" placeholder="Adresse email"></input>
    <br><br>
    <label>Mot de passe</label>
    <input type="password" name="password" placeholder="Mot de passe">
    <br><br>
    <input type="submit" value="s'inscrire"> 
</form>

<?php

}

?>