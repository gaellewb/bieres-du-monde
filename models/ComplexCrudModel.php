<?php

// Ce modèle héhite de MainModel
class ComplexCrudModel extends MainModel {

// Connexion à la base de données
    public function __construct(){
        $this->getConnection();
    }

// Requête pour LIRE 
    public function getRead(){
        $sql = "SELECT A.ID_ARTICLE, A.NOM_ARTICLE, A.TITRAGE, C.NOM_COULEUR, M.NOM_MARQUE FROM article A
        LEFT JOIN couleur C ON C.ID_COULEUR = A.ID_COULEUR
        LEFT JOIN marque M ON M.ID_MARQUE = A.ID_MARQUE
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
        if (isset($_POST['nomBiere']) && isset($_POST['titrage']) && isset($_POST['marque']) && isset($_POST['submit1'])){
        // && isset($_POST['color'])
            // $color = $_POST ['color'];
            $nomBiere = $_POST ['nomBiere'];
            $titrage = $_POST ['titrage'];
            $marque = $_POST ['marque'];
            $soumettre = $_POST ['submit1'];
        }

        // Je récupère le dernier ID connu
        $sql = "SELECT MAX(ID_ARTICLE) as lastID FROM article";
        $query = $this->connection->prepare($sql);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        $lastId = $result['lastID'];

        // Création d'une variable : dernier article connu + 1
        $newId = $lastId + 1;

        // Requête pour récupérer les données du formulaire
        $sql = "INSERT INTO article (ID_ARTICLE, NOM_ARTICLE, TITRAGE, ID_MARQUE) VALUES (:ID_ARTICLE, :NOM_ARTICLE, :TITRAGE,  :ID_MARQUE)";
        $query = $this->connection->prepare($sql); 

        if (isset($soumettre)) {
            $query->bindValue(":ID_ARTICLE", $newId, PDO::PARAM_INT);
            $query->bindValue(":NOM_ARTICLE", $nomBiere, PDO::PARAM_STR);
            $query->bindValue(":TITRAGE", $titrage, PDO::PARAM_INT);
            $query->bindValue(":ID_MARQUE", $marque, PDO::PARAM_INT); 
            // $reponse->bindValue(":ID_COLOR", $color, PDO::PARAM_INT); 
            $query->execute();

            // Redirection vers la view
            header("Location:complexCrud"); 
        }

        // Requête pour mettre dans le SELECT le nom de toutes les marques
        $resultat = $this->connection->query("SELECT ID_MARQUE, NOM_MARQUE FROM marque");

        // TESTS POUR METTRE EN PLUS LA TABLE COULEUR
        // $sql2 = "SELECT C.NOM_COULEUR, C.ID_COULEUR, M.NOM_MARQUE, M.ID_MARQUE, A.ID_ARTICLE 
        // FROM article A
        // JOIN couleur C ON A.ID_COULEUR = C.ID_COULEUR
        // JOIN marque M ON A.ID_MARQUE = M.ID_MARQUE";


            // $resultat = $this->connection->query($sql2);
            // $resultat->execute();
            

            // $sql3 = "SELECT NOM_MARQUE, ID_MARQUE FROM marque";
            // $resultat = $this->connection->prepare($sql3);
            // $resultat->execute();
            
            return $resultat->fetchAll(PDO::FETCH_ASSOC);   
    }

// REQUETE POUR MODIFIER UN ARTICLE
    public function getUpdate(){
        if (isset($_POST['idBeer']) && isset($_POST['newNameBeer']) && isset($_POST['titrage']) && isset($_POST['submit2']) && isset($_POST['marque2'])) {
            $idBeer = $_POST['idBeer'];
            $newNameBeer = $_POST['newNameBeer'];
            $titrage = $_POST['titrage'];
            $submit2 = $_POST['submit2'];
            $marque2 = $_POST['marque2'];
        }   
        
        if (isset($submit2)) {
        // REQUETE pour avoir nom et titrage bière
            $sql = "UPDATE article SET NOM_ARTICLE = :newNameBeer, TITRAGE = :titrage  WHERE ID_ARTICLE = :idBeer";
            $query = $this->connection->prepare($sql);

            $query->bindValue(":idBeer", $idBeer, PDO::PARAM_INT);
            $query->bindValue(":newNameBeer", $newNameBeer, PDO::PARAM_STR);
            $query->bindValue(":titrage", $titrage, PDO::PARAM_INT);

            $query->execute();

        // REQUETE pour avoir nom et id marque
            $sql2 = "UPDATE marque SET NOM_MARQUE = :marque
            WHERE ID_MARQUE IN (SELECT ID_MARQUE FROM article WHERE ID_ARTICLE = :idBeer)";
            $query2 = $this->connection->prepare($sql2);

            $query2->bindValue(":idBeer", $idBeer, PDO::PARAM_INT);
            $query2->bindValue(":marque", $marque2, PDO::PARAM_STR);

            $query2->execute();      
            // Redirection vers la view
            header("Location:complexCrud");
        }

        // REQUETE pour mettre le nom marque dans le menu déroulant
        $sql ="SELECT NOM_MARQUE FROM marque";
        $resultat = $this->connection->query($sql);

        return $resultat->fetchAll(PDO::FETCH_ASSOC);   
    }
    

// REQUETE POUR SUPPRIMER UN ARTICLE
    public function getDelete(){
        if (isset($_POST['toDelete'])) {
            $id=$_POST['toDelete'];
            
            $sql = "DELETE FROM article WHERE ID_ARTICLE= :id";
            $query = $this->connection->prepare($sql);
            $query->bindvalue(':id', $id, PDO::PARAM_INT);

            $query->execute();

            // Redirection vers la view
            header("Location:complexCrud");
        }
    } 

}