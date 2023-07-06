<?php

// ComplexCrudModel héhite de MainModel
class ComplexCrudModel extends MainModel {

// Connexion à la base de données
    public function __construct(){
        $this->getConnection();
    }

// METHOD : READ ARTICLE
    public function getRead(){
        // REQUETE SQL pour récupérer les informations des 10 derniers articles (ID, nom, titrage, couleur, marque)
        $sql = "SELECT A.ID_ARTICLE, A.NOM_ARTICLE, A.TITRAGE, C.NOM_COULEUR, M.NOM_MARQUE FROM article A
        LEFT JOIN couleur C ON C.ID_COULEUR = A.ID_COULEUR
        LEFT JOIN marque M ON M.ID_MARQUE = A.ID_MARQUE
        ORDER BY A.ID_ARTICLE desc
        LIMIT 10";

        // Exécution de la requête SQL
        $query = $this->connection->prepare($sql);
        $query->execute();

        // Retourne tous les résultats de la requête sous forme d'un tableau associatif
        return $query->fetchAll();
    }

// METHOD : CREATE ARTICLE
public function getCreate() {
        // Vérifie si les paramètres nécessaires sont définis dans $_POST
        if (isset($_POST['nomBiere']) && isset($_POST['titrage']) && isset($_POST['marque']) && isset($_POST['submit1'])){
            $nomBiere = $_POST ['nomBiere'];
            $titrage = $_POST ['titrage'];
            $marque = $_POST ['marque'];
            $soumettre = $_POST ['submit1'];
        }

        // REQUETE qui récupère le dernier id connu
        $sql = "SELECT MAX(ID_ARTICLE) as lastID FROM article";
        // Exécution de la requête SQL
        $query = $this->connection->prepare($sql);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        // Obtient la valeur de l'id le plus élevé   
        $lastId = $result['lastID'];

        // Génère un nouvel id en ajoutant 1 à l'id le plus élevé existant
        $newId = $lastId + 1;

        // REQUETE SQL pour récupérer les données du formulaire et insérer ces nouvelles informations dans la BDD
        $sql = "INSERT INTO article (ID_ARTICLE, NOM_ARTICLE, TITRAGE, ID_MARQUE) VALUES (:ID_ARTICLE, :NOM_ARTICLE, :TITRAGE,  :ID_MARQUE)";

        // Exécution de la requête SQL
        $query = $this->connection->prepare($sql); 

        // Vérifie si $soumettre est défini dans $_POST
        if (isset($soumettre)) {
            // Je lie les emplacements nommés de la requête aux valeurs passées en paramètres
            $query->bindValue(":ID_ARTICLE", $newId, PDO::PARAM_INT);
            $query->bindValue(":NOM_ARTICLE", $nomBiere, PDO::PARAM_STR);
            $query->bindValue(":TITRAGE", $titrage, PDO::PARAM_INT);
            $query->bindValue(":ID_MARQUE", $marque, PDO::PARAM_INT); 
            $query->execute();

            // Redirection vers la view complexCrud
            header("Location:complexCrud"); 
        }

        // Requête pour mettre dans le SELECT le nom de toutes les marques
        $resultat = $this->connection->query("SELECT ID_MARQUE, NOM_MARQUE FROM marque");

        // Retourne tous les résultats de la requête
        return $resultat->fetchAll(PDO::FETCH_ASSOC);   
    }


// METHOD : UPDATE ARTICLE
    public function getUpdate(){
        // Vérifie si les paramètres nécessaires sont définis dans $_POST
        if (isset($_POST['idBeer']) && isset($_POST['newNameBeer']) && isset($_POST['titrage']) && isset($_POST['submit2']) && isset($_POST['marque2'])) {
            $idBeer = $_POST['idBeer']; // Récupère l'id bière
            $newNameBeer = $_POST['newNameBeer']; // Récupère le nouveau nom de la bière
            $titrage = $_POST['titrage'];
            $submit2 = $_POST['submit2'];
            $marque2 = $_POST['marque2'];
        }   
        
        // Si le formulaire est soumis (le bouton "submit2" est cliqué)
        if (isset($submit2)) {
        // REQUETE pour mettre à jour le nom et le titrage de la bière
            $sql = "UPDATE article SET NOM_ARTICLE = :newNameBeer, TITRAGE = :titrage  WHERE ID_ARTICLE = :idBeer";
            $query = $this->connection->prepare($sql);

            // Je lie les emplacements nommés de la requête aux valeurs passées en paramètres
            $query->bindValue(":idBeer", $idBeer, PDO::PARAM_INT);
            $query->bindValue(":newNameBeer", $newNameBeer, PDO::PARAM_STR);
            $query->bindValue(":titrage", $titrage, PDO::PARAM_INT);

            $query->execute();

        // REQUETE pour mettre à jour l'id de la marque de la bière
            $sql2 = "UPDATE article SET ID_MARQUE = :idMarque
            WHERE ID_ARTICLE = :idBeer";
            $query2 = $this->connection->prepare($sql2);

            $query2->bindValue(":idBeer", $idBeer, PDO::PARAM_INT);
            $query2->bindValue(":idMarque", $marque2, PDO::PARAM_INT);

            $query2->execute();     
            
            // Redirection vers la view complexCrud
            header("Location:complexCrud");
        }

        // REQUETE pour récupérer les noms et les identifiants de toutes les marques qui seront affichés dans le menu déroulant
        $sql ="SELECT NOM_MARQUE, ID_MARQUE FROM marque";
        $resultat = $this->connection->query($sql);

        return $resultat->fetchAll(PDO::FETCH_ASSOC);   
    }
    
// METHOD : DELETE ARTICLE
    public function getDelete(){
        // Vérifie si le paramètre 'toDelete' est défini dans $_POST
        if (isset($_POST['toDelete'])) {
            $id=$_POST['toDelete']; // Récupère l'id bière à supprimer
            
            // REQUETE SQL pour supprimer l'article avec l'id spécifié
            $sql = "DELETE FROM article WHERE ID_ARTICLE= :id";
            $query = $this->connection->prepare($sql);
            // Je lie les :id à $id
            $query->bindvalue(':id', $id, PDO::PARAM_INT);
            $query->execute();

            // Redirection vers la view complexCrud
            header("Location:complexCrud");
        }
    } 
}