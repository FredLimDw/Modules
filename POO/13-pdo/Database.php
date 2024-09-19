<?php 


class Database 
{
    private $host = 'localhost';
    private $dbName = 'pdoPoo';
    private $username = 'root';
    private $password = '';
    private $config = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // rapport des erreurs
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" // forcer l'encodage en UTF8
    ];
    private $pdo;


    public function connexion()
    {
        $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->dbName}", $this->username, $this->password, $this->config);

        return $this->pdo;
    }
}