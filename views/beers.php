<?php
$titlePage = "Nos bières | SBDM";
$descriptionPage = "Découvrez toutes les bières du Salon des Bières du Monde";
require 'app/header.php';
?>

<h1>Nos bières</h1>

<div class="container">

<table class="table">
    <thead class="thead-">
        <tr>
            <th scope="col">N° bière</th>
            <th scope="col">Nom bière</th>
            <th scope="col">Couleur</th>
            <th scope="col">Type</th>
        </tr>
    </thead>

    <tbody>
    <?php foreach ($bieres as $biere): ?>

    <tr>
        <?= "<td>". $biere['ID_ARTICLE']."</td>" ?> 
        <?= "<td>". $biere['NOM_ARTICLE']."</td>" ?> 
        <?= "<td>". $biere['NOM_COULEUR']."</td>" ?> 
        <?= "<td>". $biere['NOM_TYPE']."</td>" ?> 
    </tr>

    <?php endforeach ?>
    </tbody>

</table>


<?php
require 'app/footer.php';
?>