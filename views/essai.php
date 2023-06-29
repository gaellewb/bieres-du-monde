<?php
// $titlePage = "Nos couleurs | SBDM";
// $descriptionPage = "Découvrez toutes nos bières selon leur couleur.";
// require (ROOT.'app/header.php');

require "../models/EssaiModel.php" ;
// require "../app/ModelPrincipal.php" ;
?>

<h1>Page ESSAI</h1>


<?php 

// $bieres = new EssaiModel();
// $bieres -> getAll();
// var_dump($bieres);
echo $essai;
?>

<div class="container">
    <h1 class="text-center m-4">Liste des bieres</h1>
<?php 
foreach ($bieres as $biere): 
?>
        <div class="row">
            <div class="offset-1 col-2 mb-2">
                <?php
                $biere['ID_ARTICLE']
                ?>
                 <!-- -  -->
                <?php 
                $biere['NOM_ARTICLE'] 
                ?> 
            </div>
        </div>
    <?php 
    endforeach 
    ?>
</div>




<?php
// require (ROOT.'app/footer.php');
?>