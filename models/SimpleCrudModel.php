<?php

// Ce modèle héhite de MainModel
class SimpleCrudModel extends MainModel {   

    // Connexion à la base de données
    public function __construct(){
        $this->getConnection();
    }

    // Requête pour LIRE les propriétés de la table couleur
    public function getPropertiesColors(){
        $sql = "SELECT ID_COULEUR, NOM_COULEUR
        FROM couleur";
        $query = $this->connection->query($sql);
        $query->execute();
        return $query->fetchAll();
    }

    // Requête pour CREER une couleur
    public function getCreateColor() {

        $sql = "SELECT MAX(ID_COULEUR) as lastID FROM couleur";
        $reponse = $this->connection->prepare($sql);       
        $reponse->execute();       
        $result = $reponse->fetch(PDO::FETCH_ASSOC);      
        $lastId = $result['lastID'];

        $newId = $lastId + 1;

        if (isset($_POST['newColor'])) {
            $newColor = $_POST['newColor'];
            // $submit = $_POST['submit'];
            // extract ($_POST);

            $sql = "INSERT INTO couleur (ID_COULEUR, NOM_COULEUR) VALUES (:id, :name)"; 
            $reponse = $this->connection->prepare($sql);
            $reponse->bindvalue(":id", $newId, PDO::PARAM_INT);
            $reponse->bindvalue(":name", $newColor, PDO::PARAM_STR);
            $reponse->execute();          
        }
    }

    // Requête pour MODIFIER une couleur



    // Requête pour SUPPRIMER une couleur
    // $sql = "DELETE FROM couleur WHERE ID_COULEUR=?"
}