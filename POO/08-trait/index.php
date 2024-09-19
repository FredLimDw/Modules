<?php
/*
    Les traits ont été inventés pour repousser les limites de l'héritage. En effet une class peut heriter que d une seule class (extends)
    En revanche une class peut importer plusieur traits
    Un trait n'est pas instanciable car un trait n'est pas u class. On ne peut pas pas créer d'objet issu d'un trait
    Ca a vocation que d'être importé

*/



trait Test
{
    public $proprieteTest = 'test';
    public function functionTest(): string
    {
        return 'function test';
    }
}

trait Kiwi
{
    public $proprieteKiwi = 'kiwi';

    public function functionKiwi(): string 
    {
        return 'function kiwi';
    }

}

class Testing
{
    use Test;
    use Kiwi;
    // use Test, Kiwi;
}

$testing = new Testing();
echo $testing->proprieteTest;
echo '<br>';
echo $testing->functionTest();
echo '<br>';
echo $testing->proprieteKiwi;
echo '<br>';
echo $testing->functionKiwi();