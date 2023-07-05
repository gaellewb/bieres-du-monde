<?php
    // function getUpdateColors(){

        // if (isset($_POST['updateColors']) && isset($POST['IdColor']) && isset($_POST['update']))
        // && !empty($_POST['updateColors'])) 
        // {
        //     $updateColors = $_POST['updateColors'];
        //     $IdColor = $POST['IdColor'];
        //     $btnUpdate = $_POST['update'];

        //     $sql ="UPDATE couleur SET NOM_COULEUR=:updateColor WHERE ID_COULEUR=:id";
        //     $query=$this->connection->prepare($sql);

        //     // Je lie chaque marqueur à une valeur du formulaire
        //     $query->bindvalue(':id', $IdColor, PDO::PARAM_INT);
        //     $query->bindvalue(':updateColor', $updateColors, PDO::PARAM_STR);

        //     $query->execute();

        //     header("Location:simpleCrud");
        // } 


        // if (isset($_POST['idToUpdate'])) {
        //     $idToUpdate = $_POST['idToUpdate'];

        //     $test = "SELECT NOM_COULEUR FROM couleur WHERE id=:id";
        //     $requete=$this->connection->prepare($test);           

        //     $requete->bindvalue(':id', $idToUpdate, PDO::PARAM_INT);
        //     $requete->execute();
            // return $requete->fetch();
            
            // header("Location:simpleCrud");
        // } 

        // if (isset($_POST['submit2']) && isset($POST['nameToUpdate']))
        // {
        //     $test2 = "UPDATE couleur SET NOM_COULEUR=:updateColor WHERE ID_COULEUR=:id";
        //     $query = $this->connection->prepare($test2);
        //     $requete->bindvalue(':updateColor', $idToUpdate, PDO::PARAM_INT);
    // }


