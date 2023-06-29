<?php

// BeersModel hérite de ModelPrincipal
class BeersModel extends MainModel {
    
    public function __construct(){
        // Connexion à la base de données
        $this->getConnection();
    }

    public function getAllBeers(){
        $sql = "SELECT A.ID_ARTICLE, A.NOM_ARTICLE, C.NOM_COULEUR, T.NOM_TYPE
        FROM article A 
        LEFT JOIN couleur C ON A.ID_COULEUR = C.ID_COULEUR
        LEFT JOIN typebiere T ON A.ID_TYPE = T.ID_TYPE
        ORDER BY A.ID_ARTICLE ASC";
        $query = $this->connection->query($sql);
        $query->execute();
        return $query ->fetchAll();
    }

    public function getRandBeers(){
        $sql = "SELECT A.ID_ARTICLE, A.NOM_ARTICLE, C.NOM_COULEUR, T.NOM_TYPE
        FROM article A 
        LEFT JOIN couleur C ON A.ID_COULEUR = C.ID_COULEUR
        LEFT JOIN typebiere T ON A.ID_TYPE = T.ID_TYPE
        ORDER BY RAND()
        LIMIT 5";
        $query = $this->connection->query($sql);
        $query->execute();
        return $query ->fetchAll();
    }
}