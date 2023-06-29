<?php

class ColorModel extends MainModel {

    public function __construct() {
        $this->getConnection();
    }

    public function getBlond() {
        $sql = "SELECT A.ID_ARTICLE, A.NOM_ARTICLE, T.NOM_TYPE
                FROM article A
                JOIN couleur C ON A.ID_COULEUR = C.ID_COULEUR
                JOIN typebiere T ON A.ID_TYPE = T.ID_TYPE
                WHERE C.ID_COULEUR = 1
                ORDER BY A.ID_ARTICLE"; 
        $query = $this->connection->query($sql);
        $query->execute();
        return $query->fetchAll();
    }
}