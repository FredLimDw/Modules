<?php

interface Authentification
{
    public function connexion(): string;
    public function deconnexion(): string;
    public function motDePasseOublie(): string;
    public function seSouvenirDeMoi(): string;


}

interface Profil
{
    public function voirProfil(): string;
    public function modifierProfil(): string;
    public function modifierMotDePasse(): string;
    public function supprimerProfil(): string;
}

/*
    Une interface va être implémentée dans une class,
    Une class peut implémenter plusieurs interface avec le mot clé : impléments
    Une interface ne contient que des méthodes public sans contenu
    Son objectif est de fournir une structure de méthodes (dénomination et obligation)
*/

class Utilisateur implements Authentification 
{
    public function connexion(): string
    {
        return 'Connexion';
    }
    public function deconnexion(): string
    {
        return 'Déconnexion';
    }
    public function motDePasseOublie(): string
    {
        return 'Mot de passe oublié';
    }
    public function seSouvenirDeMoi(): string
    {
        return 'Se souvenir de moi';
    }
    public function voirProfil(): string
    {
        return 'Voir le profil';
    }
    public function modifierProfil(): string
    {
        return 'Modifier le profil';
    }
    public function modifierMotDePasse(): string
    {
        return 'Modifier le mot de passe';
    }
    public function supprimerProfil(): string
    {
        return 'Supprimer le profil';
    }
}