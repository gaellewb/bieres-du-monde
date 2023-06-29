<?php

class MainModel {
    protected $connection ;
    
    public function getConnection() {
        // Informations de connexion à la base de données :       
        require_once 'loginBdd.php';

        try {
            $this->connection = new PDO($bdd, $username, $password);
            // je m'assure d'envoyer les données en utf8
            $this->connection->exec("SET NAMES utf8");
            // echo "<h5 class='text-center'>Vous êtes bien connecté à la base de données</h5>";
        } catch(PDOException $exception) {
            // echo "<h5 class='text-center'>Erreur de connexion :".$exception->getMessage()."</h5>";
        }
    }
}

