<?php

// BeersModel hérite de MainModel
class BeersModel extends MainModel {
    
// Connexion à la base de données
    public function __construct(){
        $this->getConnection();
    }

// METHODE QUI RECUPERE TOUTES LES BIERES
    public function getAllBeers(){
        // Requête SQL pour récupérer toutes les bières avec leurs informations (nom, couleur, type)
        $sql = "SELECT A.ID_ARTICLE, A.NOM_ARTICLE, C.NOM_COULEUR, T.NOM_TYPE
        FROM article A 
        LEFT JOIN couleur C ON A.ID_COULEUR = C.ID_COULEUR
        LEFT JOIN typebiere T ON A.ID_TYPE = T.ID_TYPE
        ORDER BY A.ID_ARTICLE ASC";

        // Exécution de la requête SQL
        $query = $this->connection->query($sql);
        $query->execute();

        // Retourne tous les résultats de la requête
        return $query ->fetchAll();
    }

// METHODE QUI RECUPERE 5 BIERES ALEATOIRES
    public function getRandBeers(){
        // Requête SQL pour récupérer 5 bières aléatoires avec leurs informations (nom, couleur, type)
        $sql = "SELECT A.ID_ARTICLE, A.NOM_ARTICLE, C.NOM_COULEUR, T.NOM_TYPE
        FROM article A 
        LEFT JOIN couleur C ON A.ID_COULEUR = C.ID_COULEUR
        LEFT JOIN typebiere T ON A.ID_TYPE = T.ID_TYPE
        ORDER BY RAND()
        LIMIT 5";

        // Exécution de la requête SQL
        $query = $this->connection->query($sql);
        $query->execute();

        // Retourne tous les résultats de la requête
        return $query ->fetchAll();
    }
}