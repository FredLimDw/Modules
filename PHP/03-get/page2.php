<h1>Page2</h1>
<hr>
<?php


if(isset($_GET['produit']) && isset($_GET['couleur']) && isset($_GET['prix'])){
echo $_GET['produit'] . '<br>';
echo $_GET['couleur'] . '<br>';
echo $_GET['prix'] . '<br>';

echo 'Vous avez choisi le ' . $_GET ['produit'] . ' de couleur ' . $_GET['couleur'] . ' au prix de ' . $_GET['prix'] . '€'; 
} else {
    echo 'Aucun produit sélectionné';
}



?>