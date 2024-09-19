<?php

final class Application
{
    public function lancementApplication()
    {
        return 'L\'application est lancée';
    }
}
$appli= new Application();
echo $appli1->lancementApplication();

/*class Extension extends Application
{

}

$extension = new Extension ();*/

class Extension
{
    final public function lancementExtension()
    {
        return 'L\'extension est lancée';
    }
}

class Extension2 extends Extension
{
    public function lancementExtension()
    {
        return 'Lancement différent';
    }
}

$extension2 = new Extension2();
echo $extension2->lancementExtension();

/*
    Final est de la protection
    Une class final ne peut pas être héritée
    Une méthode final ne peut pas subir de modification

*/

