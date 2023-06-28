<?php

require_once '../app/loginBdd.php';
// BeersModel hérite de ModelPrincipal
// protected $connexion ;

// On efface la connexion précédente :
// $this->connexion = null ;
// }

// class EssaiModel {

try {
    $connexion = new PDO($bdd, $username, $password);
    // je m'assure d'envoyer les données en utf8
    $connexion->exec("SET NAMES utf8");
    echo "<h3 class='text-center'>Vous êtes bien connecté à la base de données WOUHOU</h3>";
} catch(PDOException $exception) {
    echo "<h3 class='text-center'>Erreur de connexion :".$exception->getMessage()."</h3>";
}


    // public function __construct(){
    //     // Je connecte la classe à la BDD
    //     $this->getConnection();
    // // }

    $sql ="SELECT * FROM `article`";
    $requete = $connexion->query($sql);
    $bieres = $requete ->fetchAll();
    // }

// }

// }



?>