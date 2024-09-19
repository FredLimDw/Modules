<?php
function inclusionAutomatique($nomClass)
    {
        require_once($nomClass . '.php');
        echo '<p> la class ' . $nomClass . ' a été intégrée</p>';
    }
spl_autoload_register('inclusionAutomatique');

/*
L'autoload est un mecanisme qui detecte l'instanciation d'objet et intégrer la class de l'objet

La fonction prédéfinie php spl_autoload_register() permet d'executer une fonction (argument de la fonction spl_autoload_register()) lorsque l'interpreteur va voir passer le terme
La fonction prédéfinie php spl_autoload_register()  est exécutée automatiquement à chaque fois qu'il y a le mot clé 'new' dans le code (Rappel : le mot clé 'new' permet de générer un objet, le terme qui suit le new est le nom de la class)

L'objectif de la focntion spl_autoload_register() est d'appeler une autre function, c'est le nom (str) de cette dernière qui doit être défini comme argument

*/ 