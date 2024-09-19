<?php
// Je me connecte à la base de données :
$pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

//host : serveur
//dbname : nom de la base
// root : utilisateur
// '' : mdp mais on le laisse vide car y'en a pas.
//PDO//ATTR_ERRMODE => PDO::ERRMODE_WARNING : permet d'afficher les erreurs mysql
//PDO//MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' : pour encoder les échanges avec la base UTF8

//Vérification avec la ligne ci-dessous et si cela fonctionne bien alors l'enlever : 
//var_dump($pdo);

//J'insère un nouvel employé
//$pdo->exec('INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ("Alexandre", "Dupond", "m", "commercial", "2024-08-30", 2000)');

//Je modifie un employé

//$pdo->exec('UPDATE employes SET prenom = "Alex" WHERE id_employes = 993');

// Je supprime un employé :
//$pdo->exec('DELETE FROM employes WHERE id_employes = 993');

//Afficher un employé sur la page :
//Je crée une variable pour stocker toutes les infos de Stéphanie :
// on l'appelle comme on veut cette variable, ici $r mais ca peut être n'importe quoi comme $stephanie par exemple

$r = $pdo->query('SELECT * FROM employes WHERE id_employes= 990');
//Pour rendre cette requete exploitable en php il faut créer un array. Donc je stock dans la variable $employe, les informations stockées dans $r sous forme d'array : 
$employe = $r->fetch(PDO::FETCH_ASSOC);
//On l'affiche :
print_r($employe);
echo '<br>';

//Exercice :
//Afficher le prenom et le nom de l'employé
echo $employe ['prenom'] . ' ' . $employe['nom'] . '<br>';
// le vide dans les guillemets c'est juste pour mettre de l'espace

//Le faire avec toute la table :
$r = $pdo->query('SELECT * FROM employes');

while($employe = $r->fetch(PDO::FETCH_ASSOC)){
    echo $employe['prenom'] . ' ' . $employe['nom'] . '<br>';
}



?>