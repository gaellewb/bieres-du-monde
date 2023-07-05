<?php

// ColorModel hérite de MainModel
class ColorModel extends MainModel {

// Connexion à la base de données
    public function __construct() {
        $this->getConnection();
    }

// METHODE POUR RECUPERER TOUTES LES BIERES BLONDES
    public function getBlond() {
        // REQUETE SQL pour sélectionner les bières blondes avec leurs informations (ID, nom, type)
        $sql = "SELECT A.ID_ARTICLE, A.NOM_ARTICLE, T.NOM_TYPE
                FROM article A
                JOIN couleur C ON A.ID_COULEUR = C.ID_COULEUR
                LEFT JOIN typebiere T ON A.ID_TYPE = T.ID_TYPE
                WHERE C.ID_COULEUR = 1
                ORDER BY A.ID_ARTICLE"; 

        // Exécution de la requête SQL
        $query = $this->connection->query($sql);
        $query->execute();

        // Retourne tous les résultats de la requête
        return $query->fetchAll();
    }

// METHODE POUR RECUPERER TOUTES LES BIERES BRUNES
    public function getBrown() {
        // REQUETE SQL pour sélectionner les bières brunes avec leurs informations (ID, nom, type)
        $sql = "SELECT A.ID_ARTICLE, A.NOM_ARTICLE, T.NOM_TYPE
                FROM article A
                JOIN couleur C ON A.ID_COULEUR = C.ID_COULEUR
                LEFT JOIN typebiere T ON A.ID_TYPE = T.ID_TYPE
                WHERE C.ID_COULEUR = 2
                ORDER BY A.ID_ARTICLE"; 

        // Exécution de la requête SQL
        $query = $this->connection->query($sql);
        $query->execute();

        // Retourne tous les résultats de la requête
        return $query->fetchAll();
    }

// METHODE POUR RECUPERER TOUTES LES BIERES BLANCHES
    public function getWhite() {
        // REQUETE SQL pour sélectionner les bières blanches avec leurs informations (ID, nom, type)
        $sql = "SELECT A.ID_ARTICLE, A.NOM_ARTICLE, T.NOM_TYPE
                FROM article A
                JOIN couleur C ON A.ID_COULEUR = C.ID_COULEUR
                LEFT JOIN typebiere T ON A.ID_TYPE = T.ID_TYPE
                WHERE C.ID_COULEUR = 3
                ORDER BY A.ID_ARTICLE"; 

        // Exécution de la requête SQL
        $query = $this->connection->query($sql);
        $query->execute();

        // Retourne tous les résultats de la requête
        return $query->fetchAll();
    }

// METHODE POUR RECUPERER TOUTES LES BIERES AMBREES
    public function getAmber() {
        // REQUETE SQL pour sélectionner les bières ambrées avec leurs informations (ID, nom, type)
        $sql = "SELECT A.ID_ARTICLE, A.NOM_ARTICLE, T.NOM_TYPE
                FROM article A
                JOIN couleur C ON A.ID_COULEUR = C.ID_COULEUR
                LEFT JOIN typebiere T ON A.ID_TYPE = T.ID_TYPE
                WHERE C.ID_COULEUR = 4
                ORDER BY A.ID_ARTICLE"; 

        // Exécution de la requête SQL
        $query = $this->connection->query($sql);
        $query->execute();

        // Retourne tous les résultats de la requête
        return $query->fetchAll();
    }
}