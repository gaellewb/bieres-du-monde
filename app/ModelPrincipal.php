<?php
// Informations de connexion à la base de données :
require_once 'loginBdd.php';

try {
    $connexion = new PDO($bdd, $username, $password);
    // je m'assure d'envoyer les données en utf8
    $connexion->exec("SET NAMES utf8");
    // echo "<h3 class='text-center'>Vous êtes bien connecté à la base de données WOUHOU</h3>";
} catch(PDOException $exception) {
    // echo "<h3 class='text-center'>Erreur de connexion :".$exception->getMessage()."</h3>";
}

abstract class ModelPrincipal {

    // Propriété contenant la connexion
    protected $connexion ;

    //Propriétés contenant les informations de requêtes
    public $table ;
    public $id ;

    public function getConnection() {
        // On efface la connexion précédente :
        $this->connexion = null ;
    }

    // public function getAll(){
    //     $sql = "SELECT * FROM ". $this-> table;
    //     // $sql = "SELECT * FROM article";
    //     $query = $this->connexion->prepare($sql);
    //     $query->execute();
    //     return $query->fetchAll();
    // }
    
    // public function getOne(){
    //         $sql = "SELECT * FROM ". $this-> table ." WHERE id=" .$this->id;
    //         $query = $this->connexion->prepare($sql);
    //         $query->execute();
    //         return $query->fetchS();
    //     }
        
}
    
        
// echo "modelprincipal maaaaaaaaaaaaaaaaaaaare <br>"


?>