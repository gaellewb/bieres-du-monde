<?php

// BeersModel hérite de ModelPrincipal
class BeersModel extends ModelPrincipal {
    
    public function __construct(){
        // Connexion à la base de données
        $this->getConnection();
    // echo "rhiiiiiiiiiiiiiiiiiiii";
    }

    public function getAllBeers(){
        $sql = "SELECT * FROM article";
        $requete = $this->connexion->query($sql);
        $requete->execute();
        return $requete ->fetchAll();
        // echo "rhAAAAAAAAAAAAAAAAAAAA";
    }

}

// echo "rhOOOOOOOOOOOOOOOOOOO";
    
