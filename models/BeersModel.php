<?php

// BeersModel hérite de ModelPrincipal
class BeersModel extends ModelPrincipal {
    public function __construct(){
        $this->table = "article";
        // Je connecte la classe à la BDD
        $this->getConnection();
    }


    // public function getAll(){
    //     // $sql = "SELECT * FROM ". $this-> table;
    //     $sql = "SELECT * FROM article";
    //     $query = $this->connexion->prepare($sql);
    //     $query->execute();
    //     return $query->fetchAll();
    // }
    
    // public function getOne(){
    //         $sql = "SELECT * FROM ". $this-> table ." WHERE id=" .$this->id;
    //         $query = $this->connexion->prepare($sql);
    //         $query->execute();
    //         return $query->fetch();
    //     }

    public function getAll(){
        $sql = "SELECT * FROM article";
        $query = $this->connexion->prepare($sql);
        // $query->execute();
        // $bieres = $query->fetchAll();
    $requete = $this->connexion->query('SELECT * FROM article');
    $bieres = $requete->fetchAll();
    return $bieres ;
        }
        
        
    }
    
