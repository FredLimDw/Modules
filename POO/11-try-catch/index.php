<?php

function division(int $a, int $b)
{
    if($b === 0){
        throw new Exception('On ne peut pas diviser par zéro');
    }
    return $a/$b;
}

// Le bloc 'try' contient le code qui pourrait générer une exception
try {
    echo division(10,0); //10 vaut $a et $b vaut 0 de la function division() donc 10/0
} 
//Si une exception est lancée dans le bloc try, le bloc catch sera exécuté pour traiter cette exception
catch (Exception $e){
    echo 'Erreur : ' . $e->getMessage();
     // echo '<br>';
    // echo 'Line : ' . $e->getLine();
    // echo '<br>';
    // echo 'Code : ' . $e->getCode();
    // echo '<br>';


    echo '<pre>';
    echo print_r(get_class_methods($e));
    echo '</pre>';
}