<?php

// Déclaration de la classe MainModel qui sera le modèle principal
class MainModel {
    // Variable pour stocker la connexion à la base de données
    protected $connection ;
    
    // Méthode pour établir la connexion à la base de données
    public function getConnection() {
        // Inclure la page d'informations de connexion :       
        require_once 'loginBdd.php';
        
        // Connexion à la base de données
        try {
            // Crée une nouvelle instance de l'objet PDO pour établir la connexion à la base de données
            $this->connection = new PDO($bdd, $username, $password);
            // Configuration de l'encodage des données en UTF-8 pour assurer la compatibilité des caractères
            $this->connection->exec("SET NAMES utf8");
            // echo "Vous êtes bien connecté à la base de données";
        } catch(PDOException $exception) {
            // echo "Erreur de connexion :".$exception->getMessage()";
        }
    }
}


