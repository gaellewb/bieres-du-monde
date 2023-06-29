<?php

class EssaiModel {

public function __toString(){
    require_once '../app/loginBdd.php';
    try {
            $connexion = new PDO($bdd, $username, $password);
            echo "<h3 class='text-center'>Vous êtes bien connecté à la base de données WOUHOU</h3>";
        } catch(PDOException $exception) {
            echo "<h3 class='text-center'>Erreur de connexion :".$exception->getMessage()."</h3>";
        }
    
$requete = $connexion->query("SELECT A.ID_ARTICLE,A.NOM_ARTICLE FROM article AS A ");

while($ligne= $requete->fetch ( )): ?>

<tbody>

    <tr>

        <td><?php echo"$ligne[ID_ARTICLE]";?></th>

        <td><?php echo"$ligne[NOM_ARTICLE]";?></td>
    </tr>

    </tbody>

   <?php endwhile; 

$requete-> execute( );

}
}


//     private $connexion;
//     public function __construct() {
//         require_once '../app/loginBdd.php';
//         // $this->connexion = new PDO($bdd, $username, $password);
//         try {
//             $this->connexion = new PDO($bdd, $username, $password);
//             echo "<h3 class='text-center'>Vous êtes bien connecté à la base de données WOUHOU</h3>";
//         } catch(PDOException $exception) {
//             echo "<h3 class='text-center'>Erreur de connexion :".$exception->getMessage()."</h3>";
//         }
        
//     }

//     public function getAll() {
//         $query = "SELECT * FROM article";
//         $stmt = $this->connexion->prepare($query);
//         $stmt->execute();

//         return $stmt->fetchAll(PDO::FETCH_ASSOC);
//         $bieres = $stmt ->fetchAll();
//         // var_dump($stmt);
//         ?>
<!-- //         <div class="container">
//         <h1 class="text-center m-4">Liste des bieres</h1> -->
//     <?php 
//     foreach ($bieres as $biere): 
//     ?>
<!-- //             <div class="row">
//                 <div class="offset-1 col-2 mb-2"> -->
//                     <?php
//                     $biere['ID_ARTICLE']
//                     ?>
//                     - 
//                     <?php 
//                     $biere['NOM_ARTICLE'] 
//                     ?> 
<!-- //                 </div>
//             </div> -->
//         <?php 
//         endforeach ;

//     }
// }
// ?>

// <?php


// require_once '../app/loginBdd.php';

// class EssaiModel extends ModelPrincipal {
    
//     function dbConnect(){     
    //     require_once '../app/loginBdd.php';
    // try {
    //         $connexion = new PDO($bdd, $username, $password);
    //         // je m'assure d'envoyer les données en utf8
    //         $connexion->exec("SET NAMES utf8");
    //         echo "<h3 class='text-center'>Vous êtes bien connecté à la base de données WOUHOU</h3>";
    //     } catch(PDOException $exception) {
    //         echo "<h3 class='text-center'>Erreur de connexion :".$exception->getMessage()."</h3>";
    //     }

    // // }
    // // public function getAll(){
    // //     $database = dbConnect();
    //     $sql ="SELECT * FROM `article`";
    //     $requete = $connexion->query($sql);
    //     // $bieres= [];
        // $bieres = $requete ->fetchAll();
    // }
        // $bieres[] = $biere ;
        // return $bieres ;
    // var_dump($bieres);

    // }
// }



