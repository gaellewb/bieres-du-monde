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
        // Je récupère le dernier ID connu
        $sql = "SELECT MAX(ID_COULEUR) as lastID FROM couleur";
        $reponse = $this->connection->prepare($sql);       
        $reponse->execute();       
        $result = $reponse->fetch(PDO::FETCH_ASSOC);      
        $lastId = $result['lastID'];

        // Création d'une variable : dernier article connu + 1
        $newId = $lastId + 1;

        if (isset($_POST['newColor'])) {
            $newColor = $_POST['newColor'];

            $sql = "INSERT INTO couleur (ID_COULEUR, NOM_COULEUR) VALUES (:id, :name)"; 
            $reponse = $this->connection->prepare($sql);
            $reponse->bindvalue(":id", $newId, PDO::PARAM_INT);
            $reponse->bindvalue(":name", $newColor, PDO::PARAM_STR);
            $reponse->execute();    
            
            // Redirection vers la view
            header("Location:simpleCrud");           
        }
    }

// Requête pour MODIFIER une couleur
    public function getUpdateColors(){
        if (isset($_POST['oldColor']) && isset($_POST['newName'])) {
            $oldColor = $_POST['oldColor'];
            $newName = $_POST['newName'];

            $sql = "UPDATE couleur SET NOM_COULEUR = '$newName' WHERE NOM_COULEUR = '$oldColor'";
            $query = $this->connection->query($sql);
            $query->execute();
            
            // Redirection vers la view
            header("Location:simpleCrud");
        }
    }

// Requête pour SUPPRIMER une couleur 
    public function getDeleteColors(){
        // $id =$propertiesColor['ID_COULEUR']

        // MARCHE PAS : BOUTON pour supprimer sur la même page
        if (isset($_GET['id'])) {
            $id=strip_tags($_GET['id']);
            echo "booooooooooooo";
            
            $sql = "DELETE FROM couleur WHERE ID_COULEUR= :id";
            $query = $this->connection->prepare($sql);
            $query->bindvalue(':id', $id, PDO::PARAM_INT);

            $query->execute();

            // Redirection vers la view
            header("Location:simpleCrud");
        }


        // FONCTIONNE : FORMULAIRE pour supprimer sur la même page
        if (isset($_POST['toDelete'])) {
            $id=$_POST['toDelete'];
            
            $sql = "DELETE FROM couleur WHERE ID_COULEUR= :id";
            $query = $this->connection->prepare($sql);
            $query->bindvalue(':id', $id, PDO::PARAM_INT);

            $query->execute();

            // Redirection vers la view
            header("Location:simpleCrud");
        }
    }   
}
