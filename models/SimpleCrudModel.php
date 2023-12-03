<?php

// SimpleCrudModel héhite de MainModel
class SimpleCrudModel extends MainModel {   

// Connexion à la base de données
    public function __construct(){
        $this->getConnection();
    }

// METHOD : READ COLOR
    public function getReadColor(){
        // REQUETE SQL pour sélectionner l'id et le nom de chaque couleur
        $sql = "SELECT ID_COULEUR, NOM_COULEUR
        FROM couleur";

        // Exécution de la requête SQL
        $query = $this->connection->query($sql);
        $query->execute();

        // Retourne tous les résultats de la requête sous forme d'un tableau associatif
        // Chaque élément du tableau représente une ligne de la table "couleur"
        return $query->fetchAll();
    }

// METHOD : CREATE COLOR
    public function getCreateColor() {
        // REQUETE qui récupère le dernier id connu
        $sql = "SELECT MAX(ID_COULEUR) as lastID FROM couleur";
        // Exécution de la requête SQL
        $reponse = $this->connection->prepare($sql);       
        $reponse->execute();       
        $result = $reponse->fetch(PDO::FETCH_ASSOC);   
        // Obtient la valeur de l'id le plus élevé   
        $lastId = $result['lastID'];

        // Génère un nouvel id en ajoutant 1 à l'id le plus élevé existant
        $newId = $lastId + 1;

        // Vérifie si les paramètres nécessaires sont définis dans $_POST
        if (isset($_POST['newColor'])) {
            $newColor = $_POST['newColor']; // Récupère la nouvelle couleur à créer

            // REQUETE SQL pour récupérer les données du formulaire et insérer ces nouvelles informations dans la BDD
            $sql = "INSERT INTO couleur (ID_COULEUR, NOM_COULEUR) VALUES (:id, :name)"; 
            $reponse = $this->connection->prepare($sql);
            $reponse->bindvalue(":id", $newId, PDO::PARAM_INT);
            $reponse->bindvalue(":name", $newColor, PDO::PARAM_STR);
            $reponse->execute();    // Insère la nouvelle couleur dans la table "couleur"
            
            // Redirection vers la view simpleCrud
            header("Location:simpleCrud");           
        }
    }

// METHOD : UPDATE COLOR
    public function getUpdateColors(){
        // Vérifie si les paramètres nécessaires sont définis dans $_POST
        if (isset($_POST['idColor2']) && isset($_POST['newName'])) {
            $idColor2 = $_POST['idColor2']; // Récupère l'ancienne couleur
            $newName = $_POST['newName']; // Récupère le nouveau nom de couleur

            // REQUETE SQL pour mettre à jour le nom de couleur
            $sql = "UPDATE couleur SET NOM_COULEUR = '$newName' WHERE ID_COULEUR = '$idColor2'";

            // Execution de la requête
            $query = $this->connection->query($sql);
            $query->execute();
            
            // Redirection vers la view simpleCrud
            header("Location:simpleCrud");
        }
    }

// METHOD : DELETE COLOR
    public function getDeleteColors() {
        // FONCTIONNE : FORMULAIRE pour supprimer sur la même page
        // Vérifie si les paramètres nécessaires sont définis dans $_POST
        if (isset($_POST['toDelete'])) {
            $id=$_POST['toDelete']; // Récupère l'id de la couleur à supprimer à partir des données de formulaire
            
            // REQUETE SQL pour supprimer une couleur de la table "couleur" en fonction de l'id
            $sql = "DELETE FROM couleur WHERE ID_COULEUR= :id";
            $query = $this->connection->prepare($sql);
            // Lie la valeur de l'ID à la requête SQL
            $query->bindvalue(':id', $id, PDO::PARAM_INT);

            //Execution de la requête pour supprimer la couleur
            $query->execute();

            // Redirection vers la view simpleCrud
            header("Location:simpleCrud");
        }

        // MARCHE PAS : BOUTON pour supprimer sur la même page
        // if (isset($_GET['id'])) {
        //     $id=strip_tags($_GET['id']); // Récupère l'ID à partir des paramètres de l'URL
        //     echo "booooooooooooo";
            
        // REQUETE SQL pour supprimer une couleur de la table "couleur" en fonction de l'id
        //     $sql = "DELETE FROM couleur WHERE ID_COULEUR= :id";
        //     $query = $this->connection->prepare($sql);
        // Lie la valeur de l'ID à la requête SQL
        //     $query->bindvalue(':id', $id, PDO::PARAM_INT);

        // Execution de la requête
        //     $query->execute();

        //     // Redirection vers la view simpleCrud
        //     header("Location:simpleCrud");
        // }

    }   
}