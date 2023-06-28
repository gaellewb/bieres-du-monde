<?php
// Informations de connexion à la base de données :
// require_once 'loginBdd.php';

// try {
//     $connexion = new PDO($bdd, $username, $password);
//     // je m'assure d'envoyer les données en utf8
//     $connexion->exec("SET NAMES utf8");
//     echo "<h3 class='text-center'>Vous êtes bien connecté à la base de données WOUHOU</h3>";
// } catch(PDOException $exception) {
//     echo "<h3 class='text-center'>Erreur de connexion :".$exception->getMessage()."</h3>";
// }


class ModelPrincipal {
    protected $connexion ;
    
    public function getConnection() {
        
        require_once 'loginBdd.php';
        // On efface la connexion précédente :
        // $this->connexion = null ;
        // }

        try {
            $this->connexion = new PDO($bdd, $username, $password);
            // je m'assure d'envoyer les données en utf8
            $this->connexion->exec("SET NAMES utf8");
            echo "<h3 class='text-center'>Vous êtes bien connecté à la base de données WOUHOU</h3>";
        } catch(PDOException $exception) {
            echo "<h3 class='text-center'>Erreur de connexion :".$exception->getMessage()."</h3>";
        }
    }
}
?>