<?php

// BeersModel hérite de ModelPrincipal
class BeersModel extends ModelPrincipal {
    
    public function __construct(){
        // Connexion à la BDD
        $this->getConnection();
    }

    // public function getAll(){
    //     $sql = "SELECT * FROM article";
    //     $query = $this->connexion->prepare($sql);
    //     $query->bindValue("article", "article", PDO::PARAM_STR);
    //     $query->execute();      
    //     $test=$query->execute();
    //     return $query->fetchAll();
    // }


    // public function getAll(){

    // $sql ="SELECT * FROM `article`";
    // $requete = $this->connexion->query($sql);
    // $bieres = $requete ->fetchAll();
    // }

}

    
