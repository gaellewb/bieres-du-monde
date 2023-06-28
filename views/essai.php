<?php
// $titlePage = "Nos couleurs | SBDM";
// $descriptionPage = "Découvrez toutes nos bières selon leur couleur.";
// require (ROOT.'app/header.php');

require "../models/EssaiModel.php" ;
// require "../app/ModelPrincipal.php" ;
?>

<h1>Page ESSAI</h1>

<div class="container">
    <h1 class="text-center m-4">Liste des bieres</h1>
<?php foreach ($bieres as $biere): ?>
        <div class="row">
            <div class="offset-1 col-2 mb-2">
                <?= $biere['ID_ARTICLE'] ?> -
            </div>
            <div class="col-3 mb-2">
                <?= $biere['NOM_ARTICLE'] ?>
            </div>
            <div class="col-6">
                <?= $biere['VOLUME'] ?>
            </div>
        </div>
    <?php endforeach ?>
</div>




<?php
// require (ROOT.'app/footer.php');
?>