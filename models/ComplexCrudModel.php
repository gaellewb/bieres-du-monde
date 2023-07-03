<?php

// Ce modèle héhite de MainModel
class ComplexCrudModel extends MainModel {

// Connexion à la base de données
    public function __construct(){
        $this->getConnection();
    }

// Requête pour LIRE 
    public function getBeersAndColors(){
        $sql = "SELECT A.ID_ARTICLE, A.NOM_ARTICLE, A.TITRAGE, C.NOM_COULEUR FROM article A
        LEFT JOIN couleur C ON C.ID_COULEUR = A.ID_COULEUR
        ORDER BY A.ID_ARTICLE desc
        LIMIT 10";

        $query = $this->connection->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

// LISTE DES COULEURS
    public function getColors(){
        $sql = "SELECT NOM_COULEUR, ID_COULEUR FROM couleur";

        $query = $this->connection->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

// LISTE DES MARQUES
    public function getMarques(){
        $sql = "SELECT NOM_MARQUE, ID_MARQUE FROM marque";

        $query = $this->connection->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

// REQUETE POUR CREER UN NOUVEL ARTICLE
    public function getCreate() {
        // Je récupère le dernier ID connu
        $sql = "SELECT MAX(ID_ARTICLE) as lastID FROM article";
        $reponse = $this->connection->prepare($sql);       
        $reponse->execute();       
        $result = $reponse->fetch(PDO::FETCH_ASSOC);      
        $lastId = $result['lastID'];

        // Création d'une variable : dernier article connu + 1
        $idArticle = $lastId + 1;

        if (isset($_POST['article']) && isset($POST['titrage']) && isset($POST['color']) && isset($POST['idMarque'])) {
            $article = $_POST['article'];
            $titrage = $_POST['titrage'];
            $idColor = $_POST['color'];
            $idMarque = $_POST['idMarque'];

            $sql = "INSERT INTO article (ID_ARTICLE, NOM_ARTICLE, TITRAGE, ID_COULEUR, ID_MARQUE) VALUES (:id, :article, :titrage, :color, :idMarque"; 

            $query = $this->connection->prepare($sql);

            $query->bindvalue(":id", $idArticle, PDO::PARAM_INT);
            $query->bindvalue(":article", $article, PDO::PARAM_STR);
            $query->bindvalue(":titrage", $titrage, PDO::PARAM_INT);
            $query->bindvalue(":color", $idColor, PDO::PARAM_INT);
            $query->bindvalue(":idMarque", $idMarque, PDO::PARAM_INT);

            $query->execute();   
            
            // Redirection vers la view
            header("Location:simpleCrud");           
        }
    }


// REQUETE POUR SUPPRIMER UN ARTICLE

}